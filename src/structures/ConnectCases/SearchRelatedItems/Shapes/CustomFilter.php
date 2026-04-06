<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchRelatedItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomFieldsFilter|null $fields
 */
class CustomFilter extends Shape
{
    /**
     * @param array{fields?: CustomFieldsFilter|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
