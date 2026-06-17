<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $path
 * @property string|null $description
 * @property bool|null $visible
 */
class ConnectorParameterOverride extends Shape
{
    /**
     * @param array{
     *     path: string,
     *     description?: string|null,
     *     visible?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
