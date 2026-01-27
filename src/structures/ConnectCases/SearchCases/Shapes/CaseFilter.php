<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchCases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FieldFilter|null $field
 * @property CaseFilter|null $not
 * @property TagFilter|null $tag
 * @property list<CaseFilter>|null $andAll
 * @property list<CaseFilter>|null $orAll
 */
class CaseFilter extends Shape
{
    /**
     * @param array{
     *     field?: FieldFilter|null,
     *     not?: CaseFilter|null,
     *     tag?: TagFilter|null,
     *     andAll?: list<CaseFilter>|null,
     *     orAll?: list<CaseFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
