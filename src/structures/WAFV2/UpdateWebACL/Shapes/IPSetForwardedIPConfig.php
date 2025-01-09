<?php

namespace Sunaoka\Aws\Structures\WAFV2\UpdateWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HeaderName
 * @property 'MATCH'|'NO_MATCH' $FallbackBehavior
 * @property 'FIRST'|'LAST'|'ANY' $Position
 */
class IPSetForwardedIPConfig extends Shape
{
    /**
     * @param array{
     *     HeaderName: string,
     *     FallbackBehavior: 'MATCH'|'NO_MATCH',
     *     Position: 'FIRST'|'LAST'|'ANY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
