<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdatePaymentConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $paymentManagerId
 * @property string $paymentConnectorId
 * @property string|null $description
 * @property 'CoinbaseCDP'|'StripePrivy'|null $type
 * @property list<Shapes\CredentialsProviderConfiguration>|null $credentialProviderConfigurations
 * @property string|null $clientToken
 */
class UpdatePaymentConnectorRequest extends Request
{
    /**
     * @param array{
     *     paymentManagerId: string,
     *     paymentConnectorId: string,
     *     description?: string|null,
     *     type?: 'CoinbaseCDP'|'StripePrivy'|null,
     *     credentialProviderConfigurations?: list<Shapes\CredentialsProviderConfiguration>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
