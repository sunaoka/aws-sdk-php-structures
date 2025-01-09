<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\ListNetworkSites\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $count
 * @property list<NameValuePair> $options
 * @property 'RADIO_UNIT'|'DEVICE_IDENTIFIER' $type
 */
class NetworkResourceDefinition extends Shape
{
    /**
     * @param array{
     *     count: int<0, max>,
     *     options?: list<NameValuePair>,
     *     type: 'RADIO_UNIT'|'DEVICE_IDENTIFIER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
