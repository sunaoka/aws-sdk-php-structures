<?php

namespace Sunaoka\Aws\Structures\ConnectCases\SearchCases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FieldValue|null $equalTo
 * @property FieldValue|null $contains
 * @property FieldValue|null $greaterThan
 * @property FieldValue|null $greaterThanOrEqualTo
 * @property FieldValue|null $lessThan
 * @property FieldValue|null $lessThanOrEqualTo
 */
class FieldFilter extends Shape
{
    /**
     * @param array{
     *     equalTo?: FieldValue|null,
     *     contains?: FieldValue|null,
     *     greaterThan?: FieldValue|null,
     *     greaterThanOrEqualTo?: FieldValue|null,
     *     lessThan?: FieldValue|null,
     *     lessThanOrEqualTo?: FieldValue|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
