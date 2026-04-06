<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateEntity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property string|null $entityId
 * @property string $entityName
 * @property string|null $description
 * @property array<string, Shapes\ComponentRequest>|null $components
 * @property array<string, Shapes\CompositeComponentRequest>|null $compositeComponents
 * @property string|null $parentEntityId
 * @property array<string, string>|null $tags
 */
class CreateEntityRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     entityId?: string|null,
     *     entityName: string,
     *     description?: string|null,
     *     components?: array<string, Shapes\ComponentRequest>|null,
     *     compositeComponents?: array<string, Shapes\CompositeComponentRequest>|null,
     *     parentEntityId?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
