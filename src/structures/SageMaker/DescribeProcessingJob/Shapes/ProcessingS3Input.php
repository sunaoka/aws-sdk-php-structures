<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeProcessingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 * @property string $LocalPath
 * @property 'ManifestFile'|'S3Prefix' $S3DataType
 * @property 'Pipe'|'File' $S3InputMode
 * @property 'FullyReplicated'|'ShardedByS3Key' $S3DataDistributionType
 * @property 'None'|'Gzip' $S3CompressionType
 */
class ProcessingS3Input extends Shape
{
    /**
     * @param array{
     *     S3Uri: string,
     *     LocalPath?: string,
     *     S3DataType: 'ManifestFile'|'S3Prefix',
     *     S3InputMode?: 'Pipe'|'File',
     *     S3DataDistributionType?: 'FullyReplicated'|'ShardedByS3Key',
     *     S3CompressionType?: 'None'|'Gzip'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
