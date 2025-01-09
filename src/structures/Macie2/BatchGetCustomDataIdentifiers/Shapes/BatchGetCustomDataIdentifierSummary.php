<?php

namespace Sunaoka\Aws\Structures\Macie2\BatchGetCustomDataIdentifiers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property bool $deleted
 * @property string $description
 * @property string $id
 * @property string $name
 */
class BatchGetCustomDataIdentifierSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     deleted?: bool,
     *     description?: string,
     *     id?: string,
     *     name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
