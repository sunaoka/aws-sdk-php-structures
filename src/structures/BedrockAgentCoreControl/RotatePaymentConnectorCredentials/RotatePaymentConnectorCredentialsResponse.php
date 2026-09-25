<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\RotatePaymentConnectorCredentials;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $paymentConnectorId
 * @property string $paymentManagerId
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property 'CREATING'|'UPDATING'|'DELETING'|'READY'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|'AWS_MARKETPLACE_SUBSCRIPTION_REQUIRED'|'PENDING_AUTHENTICATION'|'PROVISIONING'|'AUTHENTICATION_EXPIRED'|'AUTHENTICATION_FAILED' $status
 */
class RotatePaymentConnectorCredentialsResponse extends Response
{
}
