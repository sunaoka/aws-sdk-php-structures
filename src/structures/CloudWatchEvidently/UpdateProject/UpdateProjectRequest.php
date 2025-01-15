<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ProjectAppConfigResourceConfig|null $appConfigResource
 * @property string|null $description
 * @property string $project
 */
class UpdateProjectRequest extends Request
{
    /**
     * @param array{
     *     appConfigResource?: Shapes\ProjectAppConfigResourceConfig|null,
     *     description?: string|null,
     *     project: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
