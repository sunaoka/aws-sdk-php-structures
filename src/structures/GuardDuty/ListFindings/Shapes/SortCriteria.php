<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttributeName
 * @property 'ASC'|'DESC' $OrderBy
 */
class SortCriteria extends Shape
{
    /**
     * @param array{
     *     AttributeName?: string,
     *     OrderBy?: 'ASC'|'DESC'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
