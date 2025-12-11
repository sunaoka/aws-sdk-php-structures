<?php

namespace Sunaoka\Aws\Structures\Connect\SearchWorkspaceAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WorkspaceId
 * @property string|null $WorkspaceArn
 * @property string|null $ResourceId
 * @property string|null $ResourceArn
 * @property string|null $ResourceType
 * @property string|null $ResourceName
 */
class WorkspaceAssociationSearchSummary extends Shape
{
    /**
     * @param array{
     *     WorkspaceId?: string|null,
     *     WorkspaceArn?: string|null,
     *     ResourceId?: string|null,
     *     ResourceArn?: string|null,
     *     ResourceType?: string|null,
     *     ResourceName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
