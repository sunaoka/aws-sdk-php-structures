<?php

namespace Sunaoka\Aws\Structures\S3Tables\ListTableBuckets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $ownerAccountId
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class TableBucketSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name: string,
     *     ownerAccountId: string,
     *     createdAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
