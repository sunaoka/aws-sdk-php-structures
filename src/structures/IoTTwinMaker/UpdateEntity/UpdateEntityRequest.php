<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\UpdateEntity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $entityId
 * @property string|null $entityName
 * @property string|null $description
 * @property array<string, Shapes\ComponentUpdateRequest>|null $componentUpdates
 * @property Shapes\ParentEntityUpdateRequest|null $parentEntityUpdate
 */
class UpdateEntityRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     entityId: string,
     *     entityName?: string|null,
     *     description?: string|null,
     *     componentUpdates?: array<string, Shapes\ComponentUpdateRequest>|null,
     *     parentEntityUpdate?: Shapes\ParentEntityUpdateRequest|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
