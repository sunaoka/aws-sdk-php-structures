<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\UpdatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $Name
 * @property string|null $Status
 * @property string|null $InputBucket
 * @property string|null $OutputBucket
 * @property string|null $Role
 * @property string|null $AwsKmsKeyArn
 * @property Notifications|null $Notifications
 * @property PipelineOutputConfig|null $ContentConfig
 * @property PipelineOutputConfig|null $ThumbnailConfig
 */
class Pipeline extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     Name?: string|null,
     *     Status?: string|null,
     *     InputBucket?: string|null,
     *     OutputBucket?: string|null,
     *     Role?: string|null,
     *     AwsKmsKeyArn?: string|null,
     *     Notifications?: Notifications|null,
     *     ContentConfig?: PipelineOutputConfig|null,
     *     ThumbnailConfig?: PipelineOutputConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
