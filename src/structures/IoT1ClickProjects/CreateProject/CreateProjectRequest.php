<?php

namespace Sunaoka\Aws\Structures\IoT1ClickProjects\CreateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectName
 * @property string $description
 * @property Shapes\PlacementTemplate $placementTemplate
 * @property array<string, string> $tags
 */
class CreateProjectRequest extends Request
{
    /**
     * @param array{
     *     projectName: string,
     *     description?: string,
     *     placementTemplate?: Shapes\PlacementTemplate,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
