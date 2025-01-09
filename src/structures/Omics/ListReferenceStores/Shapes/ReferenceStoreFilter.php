<?php

namespace Sunaoka\Aws\Structures\Omics\ListReferenceStores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property \Aws\Api\DateTimeResult $createdAfter
 * @property \Aws\Api\DateTimeResult $createdBefore
 */
class ReferenceStoreFilter extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     createdAfter?: \Aws\Api\DateTimeResult,
     *     createdBefore?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
