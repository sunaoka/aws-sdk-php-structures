<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RetrievalFlowNodeServiceConfiguration $serviceConfiguration
 */
class RetrievalFlowNodeConfiguration extends Shape
{
    /**
     * @param array{serviceConfiguration: RetrievalFlowNodeServiceConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
