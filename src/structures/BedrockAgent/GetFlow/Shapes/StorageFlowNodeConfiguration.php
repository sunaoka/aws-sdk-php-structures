<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property StorageFlowNodeServiceConfiguration $serviceConfiguration
 */
class StorageFlowNodeConfiguration extends Shape
{
    /**
     * @param array{serviceConfiguration: StorageFlowNodeServiceConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
