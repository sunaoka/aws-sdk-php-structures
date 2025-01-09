<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\UpdatePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string $Name
 * @property string $InputBucket
 * @property string $Role
 * @property string $AwsKmsKeyArn
 * @property Shapes\Notifications $Notifications
 * @property Shapes\PipelineOutputConfig $ContentConfig
 * @property Shapes\PipelineOutputConfig $ThumbnailConfig
 */
class UpdatePipelineRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Name?: string,
     *     InputBucket?: string,
     *     Role?: string,
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
