<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\CreateAccessGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $field
 * @property 'IN' $operator
 * @property list<string> $values
 */
class RowScope extends Shape
{
    /**
     * @param array{
     *     field: string,
     *     operator: 'IN',
     *     values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
