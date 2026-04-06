<?php

namespace Sunaoka\Aws\Structures\imagebuilder\StartImagePipelineExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $imagePipelineArn
 * @property string $clientToken
 * @property array<string, string>|null $tags
 */
class StartImagePipelineExecutionRequest extends Request
{
    /**
     * @param array{
     *     imagePipelineArn: string,
     *     clientToken: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
