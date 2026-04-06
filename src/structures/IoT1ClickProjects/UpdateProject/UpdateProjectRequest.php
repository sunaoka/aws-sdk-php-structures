<?php

namespace Sunaoka\Aws\Structures\IoT1ClickProjects\UpdateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectName
 * @property string|null $description
 * @property Shapes\PlacementTemplate|null $placementTemplate
 */
class UpdateProjectRequest extends Request
{
    /**
     * @param array{
     *     projectName: string,
     *     description?: string|null,
     *     placementTemplate?: Shapes\PlacementTemplate|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
