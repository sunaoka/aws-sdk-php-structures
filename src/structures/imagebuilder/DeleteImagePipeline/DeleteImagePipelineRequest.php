<?php

namespace Sunaoka\Aws\Structures\imagebuilder\DeleteImagePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $imagePipelineArn
 */
class DeleteImagePipelineRequest extends Request
{
    /**
     * @param array{imagePipelineArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
