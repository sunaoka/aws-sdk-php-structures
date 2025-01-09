<?php

namespace Sunaoka\Aws\Structures\Ses\PutConfigurationSetDeliveryOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property Shapes\DeliveryOptions $DeliveryOptions
 */
class PutConfigurationSetDeliveryOptionsRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetName: string,
     *     DeliveryOptions?: Shapes\DeliveryOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
