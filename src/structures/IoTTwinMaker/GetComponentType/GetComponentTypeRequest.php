<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetComponentType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $componentTypeId
 */
class GetComponentTypeRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     componentTypeId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
