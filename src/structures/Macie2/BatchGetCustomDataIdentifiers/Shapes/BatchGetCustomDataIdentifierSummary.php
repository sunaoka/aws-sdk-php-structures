<?php

namespace Sunaoka\Aws\Structures\Macie2\BatchGetCustomDataIdentifiers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property bool|null $deleted
 * @property string|null $description
 * @property string|null $id
 * @property string|null $name
 */
class BatchGetCustomDataIdentifierSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     deleted?: bool|null,
     *     description?: string|null,
     *     id?: string|null,
     *     name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
