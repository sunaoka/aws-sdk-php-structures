<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchRelatedItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FieldFilter|null $field
 * @property CustomFieldsFilter|null $not
 * @property list<CustomFieldsFilter>|null $andAll
 * @property list<CustomFieldsFilter>|null $orAll
 */
class CustomFieldsFilter extends Shape
{
    /**
     * @param array{
     *     field?: FieldFilter|null,
     *     not?: CustomFieldsFilter|null,
     *     andAll?: list<CustomFieldsFilter>|null,
     *     orAll?: list<CustomFieldsFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
