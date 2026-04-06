<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\DeleteMediaPipelineKinesisVideoStreamPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class DeleteMediaPipelineKinesisVideoStreamPoolRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
