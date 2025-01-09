<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetEntity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $entityId
 */
class GetEntityRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     entityId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
