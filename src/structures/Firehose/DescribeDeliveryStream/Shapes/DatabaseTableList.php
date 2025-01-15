<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Include
 * @property list<string>|null $Exclude
 */
class DatabaseTableList extends Shape
{
    /**
     * @param array{
     *     Include?: list<string>|null,
     *     Exclude?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
