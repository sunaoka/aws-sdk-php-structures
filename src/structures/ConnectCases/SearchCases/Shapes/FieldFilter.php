<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchCases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FieldValue $contains
 * @property FieldValue $equalTo
 * @property FieldValue $greaterThan
 * @property FieldValue $greaterThanOrEqualTo
 * @property FieldValue $lessThan
 * @property FieldValue $lessThanOrEqualTo
 */
class FieldFilter extends Shape
{
    /**
     * @param array{
     *     contains?: FieldValue,
     *     equalTo?: FieldValue,
     *     greaterThan?: FieldValue,
     *     greaterThanOrEqualTo?: FieldValue,
     *     lessThan?: FieldValue,
     *     lessThanOrEqualTo?: FieldValue
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
