<?php

namespace Sunaoka\Aws\Structures\SesV2\PutConfigurationSetDeliveryOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property 'REQUIRE'|'OPTIONAL'|null $TlsPolicy
 * @property string|null $SendingPoolName
 * @property int<300, 50400>|null $MaxDeliverySeconds
 * @property 'GLOBAL'|'REGIONAL'|'ACCOUNT'|null $SharedPoolDeliveryMode
 */
class PutConfigurationSetDeliveryOptionsRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetName: string,
     *     TlsPolicy?: 'REQUIRE'|'OPTIONAL'|null,
     *     SendingPoolName?: string|null,
     *     MaxDeliverySeconds?: int<300, 50400>|null,
     *     SharedPoolDeliveryMode?: 'GLOBAL'|'REGIONAL'|'ACCOUNT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
