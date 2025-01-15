<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 * @property string|null $LocalPath
 * @property 'ManifestFile'|'S3Prefix' $S3DataType
 * @property 'Pipe'|'File'|null $S3InputMode
 * @property 'FullyReplicated'|'ShardedByS3Key'|null $S3DataDistributionType
 * @property 'None'|'Gzip'|null $S3CompressionType
 */
class ProcessingS3Input extends Shape
{
    /**
     * @param array{
     *     S3Uri: string,
     *     LocalPath?: string|null,
     *     S3DataType: 'ManifestFile'|'S3Prefix',
     *     S3InputMode?: 'Pipe'|'File'|null,
     *     S3DataDistributionType?: 'FullyReplicated'|'ShardedByS3Key'|null,
     *     S3CompressionType?: 'None'|'Gzip'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
