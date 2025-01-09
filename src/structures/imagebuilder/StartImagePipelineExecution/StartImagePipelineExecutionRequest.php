<?php

namespace Sunaoka\Aws\Structures\imagebuilder\StartImagePipelineExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $imagePipelineArn
 * @property string $clientToken
 */
class StartImagePipelineExecutionRequest extends Request
{
    /**
     * @param array{
     *     imagePipelineArn: string,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
