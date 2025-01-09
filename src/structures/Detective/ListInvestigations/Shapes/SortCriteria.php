<?php

namespace Sunaoka\Aws\Structures\Detective\ListInvestigations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SEVERITY'|'STATUS'|'CREATED_TIME' $Field
 * @property 'ASC'|'DESC' $SortOrder
 */
class SortCriteria extends Shape
{
    /**
     * @param array{
     *     Field?: 'SEVERITY'|'STATUS'|'CREATED_TIME',
     *     SortOrder?: 'ASC'|'DESC'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
