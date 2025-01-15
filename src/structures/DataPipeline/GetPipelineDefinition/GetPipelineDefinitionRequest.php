<?php

namespace Sunaoka\Aws\Structures\DataPipeline\GetPipelineDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineId
 * @property string|null $version
 */
class GetPipelineDefinitionRequest extends Request
{
    /**
     * @param array{
     *     pipelineId: string,
     *     version?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
