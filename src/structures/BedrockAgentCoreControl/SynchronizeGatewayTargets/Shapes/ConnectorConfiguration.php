<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\SynchronizeGatewayTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $description
 * @property Document|null $parameterValues
 * @property list<ConnectorParameterOverride>|null $parameterOverrides
 */
class ConnectorConfiguration extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     parameterValues?: Document|null,
     *     parameterOverrides?: list<ConnectorParameterOverride>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
