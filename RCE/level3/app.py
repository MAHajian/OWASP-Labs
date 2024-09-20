from flask import Flask, request
app = Flask(__name__)

@app.route("/echo")
def page():

    string = request.values.get('str')
    output = eval("{}".format(string))
    return str(string)

if __name__ == "__main__":
    app.run(host='0.0.0.0', port=80)
