<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\DeleteEntity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $entityId
 * @property bool $isRecursive
 */
class DeleteEntityRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     entityId: string,
     *     isRecursive?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
