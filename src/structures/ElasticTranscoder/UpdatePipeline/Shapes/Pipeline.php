<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\UpdatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property string $Name
 * @property string $Status
 * @property string $InputBucket
 * @property string $OutputBucket
 * @property string $Role
 * @property string $AwsKmsKeyArn
 * @property Notifications $Notifications
 * @property PipelineOutputConfig $ContentConfig
 * @property PipelineOutputConfig $ThumbnailConfig
 */
class Pipeline extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Arn?: string,
     *     Name?: string,
     *     Status?: string,
     *     InputBucket?: string,
     *     OutputBucket?: string,
     *     Role?: string,
     *     AwsKmsKeyArn?: string,
     *     Notifications?: Notifications,
     *     ContentConfig?: PipelineOutputConfig,
     *     ThumbnailConfig?: PipelineOutputConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
