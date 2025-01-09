<?php

namespace Sunaoka\Aws\Structures\S3\CreateBucketMetadataTableConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TableBucketArn
 * @property string $TableName
 */
class S3TablesDestination extends Shape
{
    /**
     * @param array{
     *     TableBucketArn: string,
     *     TableName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
