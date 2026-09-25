<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetPaymentConnector;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $paymentConnectorId
 * @property string $name
 * @property string|null $description
 * @property 'CoinbaseCDP'|'StripePrivy' $type
 * @property 'MANUAL'|'QUICK_CREATE'|null $provisionMode
 * @property list<Shapes\CredentialsProviderConfiguration> $credentialProviderConfigurations
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property 'CREATING'|'UPDATING'|'DELETING'|'READY'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|'AWS_MARKETPLACE_SUBSCRIPTION_REQUIRED'|'PENDING_AUTHENTICATION'|'PROVISIONING'|'AUTHENTICATION_EXPIRED'|'AUTHENTICATION_FAILED' $status
 * @property string|null $authorizationUrl
 * @property \Aws\Api\DateTimeResult|null $credentialsUpdatedAt
 */
class GetPaymentConnectorResponse extends Response
{
}
