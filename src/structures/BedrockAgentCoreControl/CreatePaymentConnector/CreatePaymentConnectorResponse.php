<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreatePaymentConnector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $paymentConnectorId
 * @property string $paymentManagerId
 * @property string $name
 * @property 'CoinbaseCDP'|'StripePrivy' $type
 * @property list<Shapes\CredentialsProviderConfiguration> $credentialProviderConfigurations
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'CREATING'|'UPDATING'|'DELETING'|'READY'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|'AWS_MARKETPLACE_SUBSCRIPTION_REQUIRED'|'PENDING_AUTHENTICATION'|'PROVISIONING'|'AUTHENTICATION_EXPIRED'|'AUTHENTICATION_FAILED' $status
 * @property string|null $authorizationUrl
 */
class CreatePaymentConnectorResponse extends Response
{
}
