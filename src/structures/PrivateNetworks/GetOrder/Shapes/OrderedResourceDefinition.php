<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\GetOrder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CommitmentConfiguration $commitmentConfiguration
 * @property int $count
 * @property 'RADIO_UNIT'|'DEVICE_IDENTIFIER' $type
 */
class OrderedResourceDefinition extends Shape
{
    /**
     * @param array{
     *     commitmentConfiguration?: CommitmentConfiguration,
     *     count: int,
     *     type: 'RADIO_UNIT'|'DEVICE_IDENTIFIER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
