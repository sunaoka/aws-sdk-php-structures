<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateConnectorDefinitionVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AmznClientToken
 * @property string $ConnectorDefinitionId
 * @property list<Shapes\Connector>|null $Connectors
 */
class CreateConnectorDefinitionVersionRequest extends Request
{
    /**
     * @param array{
     *     AmznClientToken?: string|null,
     *     ConnectorDefinitionId: string,
     *     Connectors?: list<Shapes\Connector>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
