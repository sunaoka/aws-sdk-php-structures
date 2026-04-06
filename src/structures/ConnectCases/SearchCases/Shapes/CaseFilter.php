<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchCases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CaseFilter>|null $andAll
 * @property FieldFilter|null $field
 * @property CaseFilter|null $not
 * @property list<CaseFilter>|null $orAll
 */
class CaseFilter extends Shape
{
    /**
     * @param array{
     *     andAll?: list<CaseFilter>|null,
     *     field?: FieldFilter|null,
     *     not?: CaseFilter|null,
     *     orAll?: list<CaseFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
