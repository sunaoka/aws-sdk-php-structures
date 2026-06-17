<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConnectorSource $source
 * @property list<string>|null $enabled
 * @property list<ConnectorConfiguration>|null $configurations
 */
class ConnectorTargetConfiguration extends Shape
{
    /**
     * @param array{
     *     source: ConnectorSource,
     *     enabled?: list<string>|null,
     *     configurations?: list<ConnectorConfiguration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
