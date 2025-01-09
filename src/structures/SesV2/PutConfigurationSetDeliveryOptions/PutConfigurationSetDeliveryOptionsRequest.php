<?php

namespace Sunaoka\Aws\Structures\SesV2\PutConfigurationSetDeliveryOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property 'REQUIRE'|'OPTIONAL' $TlsPolicy
 * @property string $SendingPoolName
 * @property int $MaxDeliverySeconds
 */
class PutConfigurationSetDeliveryOptionsRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetName: string,
     *     TlsPolicy?: 'REQUIRE'|'OPTIONAL',
     *     SendingPoolName?: string,
     *     MaxDeliverySeconds?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
