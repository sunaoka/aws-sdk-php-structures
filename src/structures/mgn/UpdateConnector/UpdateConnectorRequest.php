<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectorID
 * @property string $name
 * @property Shapes\ConnectorSsmCommandConfig $ssmCommandConfig
 */
class UpdateConnectorRequest extends Request
{
    /**
     * @param array{
     *     connectorID: string,
     *     name?: string,
     *     ssmCommandConfig?: Shapes\ConnectorSsmCommandConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
