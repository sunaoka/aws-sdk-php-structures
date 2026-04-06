<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\UpdateMediaPipelineKinesisVideoStreamPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property Shapes\KinesisVideoStreamConfigurationUpdate|null $StreamConfiguration
 */
class UpdateMediaPipelineKinesisVideoStreamPoolRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     StreamConfiguration?: Shapes\KinesisVideoStreamConfigurationUpdate|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
