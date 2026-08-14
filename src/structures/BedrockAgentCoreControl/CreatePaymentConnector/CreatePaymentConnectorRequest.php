<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreatePaymentConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $paymentManagerId
 * @property string $name
 * @property string|null $description
 * @property 'CoinbaseCDP'|'StripePrivy' $type
 * @property list<Shapes\CredentialsProviderConfiguration> $credentialProviderConfigurations
 * @property 'MANUAL'|'QUICK_CREATE'|null $provisionMode
 * @property string|null $clientToken
 */
class CreatePaymentConnectorRequest extends Request
{
    /**
     * @param array{
     *     paymentManagerId: string,
     *     name: string,
     *     description?: string|null,
     *     type: 'CoinbaseCDP'|'StripePrivy',
     *     credentialProviderConfigurations: list<Shapes\CredentialsProviderConfiguration>,
     *     provisionMode?: 'MANUAL'|'QUICK_CREATE'|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
