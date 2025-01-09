<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateEntity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string $entityId
 * @property string $entityName
 * @property string $description
 * @property array<string, Shapes\ComponentRequest> $components
 * @property array<string, Shapes\CompositeComponentRequest> $compositeComponents
 * @property string $parentEntityId
 * @property array<string, string> $tags
 */
class CreateEntityRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     entityId?: string,
     *     entityName: string,
     *     description?: string,
     *     components?: array<string, Shapes\ComponentRequest>,
     *     compositeComponents?: array<string, Shapes\CompositeComponentRequest>,
     *     parentEntityId?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
