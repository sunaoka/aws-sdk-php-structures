<?php

namespace Sunaoka\Aws\Structures\Detective\ListInvestigations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SEVERITY'|'STATUS'|'CREATED_TIME'|null $Field
 * @property 'ASC'|'DESC'|null $SortOrder
 */
class SortCriteria extends Shape
{
    /**
     * @param array{
     *     Field?: 'SEVERITY'|'STATUS'|'CREATED_TIME'|null,
     *     SortOrder?: 'ASC'|'DESC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
