<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\CreatePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $InputBucket
 * @property string|null $OutputBucket
 * @property string $Role
 * @property string|null $AwsKmsKeyArn
 * @property Shapes\Notifications|null $Notifications
 * @property Shapes\PipelineOutputConfig|null $ContentConfig
 * @property Shapes\PipelineOutputConfig|null $ThumbnailConfig
 */
class CreatePipelineRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     InputBucket: string,
     *     OutputBucket?: string|null,
     *     Role: string,
     *     AwsKmsKeyArn?: string|null,
     *     Notifications?: Shapes\Notifications|null,
     *     ContentConfig?: Shapes\PipelineOutputConfig|null,
     *     ThumbnailConfig?: Shapes\PipelineOutputConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
