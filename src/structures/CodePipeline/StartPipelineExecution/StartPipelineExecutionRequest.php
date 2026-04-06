<?php

namespace Sunaoka\Aws\Structures\CodePipeline\StartPipelineExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $clientRequestToken
 */
class StartPipelineExecutionRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     clientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
