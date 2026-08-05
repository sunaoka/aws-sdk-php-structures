<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $connectorId
 */
class HttpConnectorSource extends Shape
{
    /**
     * @param array{connectorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
