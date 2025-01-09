<?php

namespace Sunaoka\Aws\Structures\IoT1ClickProjects\UpdateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectName
 * @property string $description
 * @property Shapes\PlacementTemplate $placementTemplate
 */
class UpdateProjectRequest extends Request
{
    /**
     * @param array{
     *     projectName: string,
     *     description?: string,
     *     placementTemplate?: Shapes\PlacementTemplate
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
