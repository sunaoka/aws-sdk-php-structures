<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 * @property 'EQUALS'|'PREFIX'|'NOT_EQUALS'|'PREFIX_NOT_EQUALS'|'CONTAINS'|'NOT_CONTAINS' $Comparison
 */
class StringFilter extends Shape
{
    /**
     * @param array{
     *     Value?: string,
     *     Comparison?: 'EQUALS'|'PREFIX'|'NOT_EQUALS'|'PREFIX_NOT_EQUALS'|'CONTAINS'|'NOT_CONTAINS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
