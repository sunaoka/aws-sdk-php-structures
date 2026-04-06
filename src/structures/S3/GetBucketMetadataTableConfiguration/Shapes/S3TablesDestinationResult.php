<?php

namespace Sunaoka\Aws\Structures\S3\GetBucketMetadataTableConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TableBucketArn
 * @property string $TableName
 * @property string $TableArn
 * @property string $TableNamespace
 */
class S3TablesDestinationResult extends Shape
{
    /**
     * @param array{
     *     TableBucketArn: string,
     *     TableName: string,
     *     TableArn: string,
     *     TableNamespace: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
