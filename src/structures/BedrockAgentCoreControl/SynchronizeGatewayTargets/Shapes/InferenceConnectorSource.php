<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\SynchronizeGatewayTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $connectorId
 */
class InferenceConnectorSource extends Shape
{
    /**
     * @param array{connectorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
