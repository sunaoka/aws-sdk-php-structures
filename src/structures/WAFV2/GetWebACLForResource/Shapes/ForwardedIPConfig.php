<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetWebACLForResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HeaderName
 * @property 'MATCH'|'NO_MATCH' $FallbackBehavior
 */
class ForwardedIPConfig extends Shape
{
    /**
     * @param array{
     *     HeaderName: string,
     *     FallbackBehavior: 'MATCH'|'NO_MATCH'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
