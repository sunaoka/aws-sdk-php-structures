<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\ListNetworkResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $replacementOrderArn
 * @property string $returnReason
 * @property Address $shippingAddress
 * @property string $shippingLabel
 */
class ReturnInformation extends Shape
{
    /**
     * @param array{
     *     replacementOrderArn?: string,
     *     returnReason?: string,
     *     shippingAddress?: Address,
     *     shippingLabel?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
