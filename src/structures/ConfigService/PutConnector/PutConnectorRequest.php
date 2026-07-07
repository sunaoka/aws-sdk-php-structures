<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ConnectorConfiguration $ConnectorConfiguration
 * @property list<Shapes\Tag>|null $Tags
 */
class PutConnectorRequest extends Request
{
    /**
     * @param array{
     *     ConnectorConfiguration: Shapes\ConnectorConfiguration,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
