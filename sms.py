#!/usr/bin/env python
# Install the Python helper library from twilio.com/docs/python/install
import os

from twilio.rest import Client # type: ignore

# To set up environmental variables, see http://twil.io/secure
ACCOUNT_SID = os.environ['AC1b29083cb36bed42b2b1ae80ae890f3f']
AUTH_TOKEN = os.environ['4ebe813ee571b0e83f3c03c1a7e35863']

client = Client(ACCOUNT_SID, AUTH_TOKEN)
notification = client.notify.services('ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX') \
    .notifications.create(
        to_binding='{"binding_type":"sms", "address":"+919309947011"}',
        body='Knok-Knok! This is your first Notify SMS')
print(notification.sid)
