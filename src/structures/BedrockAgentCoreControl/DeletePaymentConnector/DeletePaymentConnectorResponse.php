<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeletePaymentConnector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'CREATING'|'UPDATING'|'DELETING'|'READY'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|'AWS_MARKETPLACE_SUBSCRIPTION_REQUIRED'|'PENDING_AUTHENTICATION'|'PROVISIONING'|'AUTHENTICATION_EXPIRED'|'AUTHENTICATION_FAILED' $status
 * @property string|null $paymentConnectorId
 */
class DeletePaymentConnectorResponse extends Response
{
}
