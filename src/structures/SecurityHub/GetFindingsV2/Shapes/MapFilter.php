<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindingsV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Key
 * @property string|null $Value
 * @property 'EQUALS'|'NOT_EQUALS'|'CONTAINS'|'NOT_CONTAINS'|null $Comparison
 */
class MapFilter extends Shape
{
    /**
     * @param array{
     *     Key?: string|null,
     *     Value?: string|null,
     *     Comparison?: 'EQUALS'|'NOT_EQUALS'|'CONTAINS'|'NOT_CONTAINS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
