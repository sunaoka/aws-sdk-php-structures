<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\DescribeElasticsearchInstanceTypeLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LimitName
 * @property list<string> $LimitValues
 */
class StorageTypeLimit extends Shape
{
    /**
     * @param array{
     *     LimitName?: string,
     *     LimitValues?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
