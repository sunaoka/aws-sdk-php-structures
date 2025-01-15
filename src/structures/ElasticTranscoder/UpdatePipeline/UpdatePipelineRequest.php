<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\UpdatePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Id
 * @property string|null $Name
 * @property string|null $InputBucket
 * @property string|null $Role
 * @property string|null $AwsKmsKeyArn
 * @property Shapes\Notifications|null $Notifications
 * @property Shapes\PipelineOutputConfig|null $ContentConfig
 * @property Shapes\PipelineOutputConfig|null $ThumbnailConfig
 */
class UpdatePipelineRequest extends Request
{
    /**
     * @param array{
     *     Id: string,
     *     Name?: string|null,
     *     InputBucket?: string|null,
     *     Role?: string|null,
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
