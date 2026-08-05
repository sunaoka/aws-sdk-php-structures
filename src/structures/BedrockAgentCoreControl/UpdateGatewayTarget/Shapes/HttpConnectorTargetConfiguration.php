<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HttpConnectorSource $source
 * @property array<string, string>|null $parameters
 */
class HttpConnectorTargetConfiguration extends Shape
{
    /**
     * @param array{
     *     source: HttpConnectorSource,
     *     parameters?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
