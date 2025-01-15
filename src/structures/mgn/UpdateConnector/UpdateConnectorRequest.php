<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $connectorID
 * @property string|null $name
 * @property Shapes\ConnectorSsmCommandConfig|null $ssmCommandConfig
 */
class UpdateConnectorRequest extends Request
{
    /**
     * @param array{
     *     connectorID: string,
     *     name?: string|null,
     *     ssmCommandConfig?: Shapes\ConnectorSsmCommandConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
