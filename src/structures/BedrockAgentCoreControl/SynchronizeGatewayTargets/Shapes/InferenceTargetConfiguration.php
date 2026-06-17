<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\SynchronizeGatewayTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InferenceConnectorTargetConfiguration|null $connector
 * @property InferenceProviderTargetConfiguration|null $provider
 */
class InferenceTargetConfiguration extends Shape
{
    /**
     * @param array{
     *     connector?: InferenceConnectorTargetConfiguration|null,
     *     provider?: InferenceProviderTargetConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
