<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<int<0, 4294967295>> $AsnList
 * @property ForwardedIPConfig|null $ForwardedIPConfig
 */
class AsnMatchStatement extends Shape
{
    /**
     * @param array{
     *     AsnList: list<int<0, 4294967295>>,
     *     ForwardedIPConfig?: ForwardedIPConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
