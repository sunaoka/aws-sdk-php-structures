<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\SendManagedThingCommand;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ManagedThingId
 * @property list<Shapes\CommandEndpoint> $Endpoints
 * @property string|null $ConnectorAssociationId
 */
class SendManagedThingCommandRequest extends Request
{
    /**
     * @param array{
     *     ManagedThingId: string,
     *     Endpoints: list<Shapes\CommandEndpoint>,
     *     ConnectorAssociationId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
