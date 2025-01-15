<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeInstanceTypeLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LimitName
 * @property list<string>|null $LimitValues
 */
class StorageTypeLimit extends Shape
{
    /**
     * @param array{
     *     LimitName?: string|null,
     *     LimitValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
