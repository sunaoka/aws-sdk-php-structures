<?php

namespace Sunaoka\Aws\Structures\Waf\GetIPSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IPV4'|'IPV6' $Type
 * @property string $Value
 */
class IPSetDescriptor extends Shape
{
    /**
     * @param array{
     *     Type: 'IPV4'|'IPV6',
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
