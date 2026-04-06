<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\ListNetworkResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $replacementOrderArn
 * @property string|null $returnReason
 * @property Address|null $shippingAddress
 * @property string|null $shippingLabel
 */
class ReturnInformation extends Shape
{
    /**
     * @param array{
     *     replacementOrderArn?: string|null,
     *     returnReason?: string|null,
     *     shippingAddress?: Address|null,
     *     shippingLabel?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
