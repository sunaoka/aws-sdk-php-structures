<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\ActivateNetworkSite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $count
 * @property list<NameValuePair> $options
 * @property 'RADIO_UNIT'|'DEVICE_IDENTIFIER' $type
 */
class NetworkResourceDefinition extends Shape
{
    /**
     * @param array{
     *     count: int,
     *     options?: list<NameValuePair>,
     *     type: 'RADIO_UNIT'|'DEVICE_IDENTIFIER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
