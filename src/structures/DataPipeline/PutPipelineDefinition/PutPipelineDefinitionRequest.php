<?php

namespace Sunaoka\Aws\Structures\DataPipeline\PutPipelineDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineId
 * @property list<Shapes\PipelineObject> $pipelineObjects
 * @property list<Shapes\ParameterObject> $parameterObjects
 * @property list<Shapes\ParameterValue> $parameterValues
 */
class PutPipelineDefinitionRequest extends Request
{
    /**
     * @param array{
     *     pipelineId: string,
     *     pipelineObjects: list<Shapes\PipelineObject>,
     *     parameterObjects?: list<Shapes\ParameterObject>,
     *     parameterValues?: list<Shapes\ParameterValue>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
