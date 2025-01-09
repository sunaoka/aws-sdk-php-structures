<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string $Value
 * @property 'EQUALS'|'NOT_EQUALS'|'CONTAINS'|'NOT_CONTAINS' $Comparison
 */
class MapFilter extends Shape
{
    /**
     * @param array{
     *     Key?: string,
     *     Value?: string,
     *     Comparison?: 'EQUALS'|'NOT_EQUALS'|'CONTAINS'|'NOT_CONTAINS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
