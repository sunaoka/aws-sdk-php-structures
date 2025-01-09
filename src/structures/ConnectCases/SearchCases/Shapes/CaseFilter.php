<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchCases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CaseFilter> $andAll
 * @property FieldFilter $field
 * @property CaseFilter $not
 * @property list<CaseFilter> $orAll
 */
class CaseFilter extends Shape
{
    /**
     * @param array{
     *     andAll?: list<CaseFilter>,
     *     field?: FieldFilter,
     *     not?: CaseFilter,
     *     orAll?: list<CaseFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
