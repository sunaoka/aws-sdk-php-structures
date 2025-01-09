<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\CreatePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $InputBucket
 * @property string $OutputBucket
 * @property string $Role
 * @property string $AwsKmsKeyArn
 * @property Shapes\Notifications $Notifications
 * @property Shapes\PipelineOutputConfig $ContentConfig
 * @property Shapes\PipelineOutputConfig $ThumbnailConfig
 */
class CreatePipelineRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     InputBucket: string,
     *     OutputBucket?: string,
     *     Role: string,
     *     AwsKmsKeyArn?: string,
     *     Notifications?: Shapes\Notifications,
     *     ContentConfig?: Shapes\PipelineOutputConfig,
     *     ThumbnailConfig?: Shapes\PipelineOutputConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
