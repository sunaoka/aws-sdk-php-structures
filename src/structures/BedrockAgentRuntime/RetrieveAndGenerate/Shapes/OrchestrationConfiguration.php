<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QueryTransformationConfiguration $queryTransformationConfiguration
 */
class OrchestrationConfiguration extends Shape
{
    /**
     * @param array{queryTransformationConfiguration: QueryTransformationConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
