<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GenerateQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\QueryGenerationInput $queryGenerationInput
 * @property Shapes\TransformationConfiguration $transformationConfiguration
 */
class GenerateQueryRequest extends Request
{
    /**
     * @param array{
     *     queryGenerationInput: Shapes\QueryGenerationInput,
     *     transformationConfiguration: Shapes\TransformationConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
