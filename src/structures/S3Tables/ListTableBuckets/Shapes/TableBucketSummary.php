<?php

namespace Sunaoka\Aws\Structures\S3Tables\ListTableBuckets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $ownerAccountId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $tableBucketId
 */
class TableBucketSummary extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     name: string,
     *     ownerAccountId: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     tableBucketId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
