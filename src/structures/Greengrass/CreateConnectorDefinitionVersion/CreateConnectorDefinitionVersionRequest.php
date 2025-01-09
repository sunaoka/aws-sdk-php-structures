<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateConnectorDefinitionVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AmznClientToken
 * @property string $ConnectorDefinitionId
 * @property list<Shapes\Connector> $Connectors
 */
class CreateConnectorDefinitionVersionRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string,
     *     ConnectorDefinitionId: string,
     *     Connectors?: list<Shapes\Connector>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
