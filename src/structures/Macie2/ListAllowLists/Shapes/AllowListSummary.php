<?php

namespace Sunaoka\Aws\Structures\Macie2\ListAllowLists\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $description
 * @property string $id
 * @property string $name
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class AllowListSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     id?: string,
     *     name?: string,
     *     updatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
