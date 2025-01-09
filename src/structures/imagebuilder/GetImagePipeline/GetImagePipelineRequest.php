<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImagePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $imagePipelineArn
 */
class GetImagePipelineRequest extends Request
{
    /**
     * @param array{imagePipelineArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
