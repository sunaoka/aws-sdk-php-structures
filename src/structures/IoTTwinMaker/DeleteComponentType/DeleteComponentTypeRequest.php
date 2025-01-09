<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\DeleteComponentType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $componentTypeId
 */
class DeleteComponentTypeRequest extends Request
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
