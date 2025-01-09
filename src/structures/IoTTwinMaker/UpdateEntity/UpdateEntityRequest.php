<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\UpdateEntity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $entityId
 * @property string $entityName
 * @property string $description
 * @property array<string, Shapes\ComponentUpdateRequest> $componentUpdates
 * @property array<string, Shapes\CompositeComponentUpdateRequest> $compositeComponentUpdates
 * @property Shapes\ParentEntityUpdateRequest $parentEntityUpdate
 */
class UpdateEntityRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     entityId: string,
     *     entityName?: string,
     *     description?: string,
     *     componentUpdates?: array<string, Shapes\ComponentUpdateRequest>,
     *     compositeComponentUpdates?: array<string, Shapes\CompositeComponentUpdateRequest>,
     *     parentEntityUpdate?: Shapes\ParentEntityUpdateRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
