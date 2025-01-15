<?php

namespace Sunaoka\Aws\Structures\Macie2\ListAllowLists\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $description
 * @property string|null $id
 * @property string|null $name
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class AllowListSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     description?: string|null,
     *     id?: string|null,
     *     name?: string|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
