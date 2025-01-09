<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaPipelineKinesisVideoStreamPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class GetMediaPipelineKinesisVideoStreamPoolRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
