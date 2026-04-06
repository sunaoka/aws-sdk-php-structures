<?php

namespace Sunaoka\Aws\Structures\IoT1ClickProjects\CreateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectName
 * @property string|null $description
 * @property Shapes\PlacementTemplate|null $placementTemplate
 * @property array<string, string>|null $tags
 */
class CreateProjectRequest extends Request
{
    /**
     * @param array{
     *     projectName: string,
     *     description?: string|null,
     *     placementTemplate?: Shapes\PlacementTemplate|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
