<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\SynchronizeGatewayTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InferenceConnectorSource $source
 */
class InferenceConnectorTargetConfiguration extends Shape
{
    /**
     * @param array{source: InferenceConnectorSource} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
