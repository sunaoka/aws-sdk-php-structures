<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ProjectAppConfigResourceConfig $appConfigResource
 * @property string $description
 * @property string $project
 */
class UpdateProjectRequest extends Request
{
    /**
     * @param array{
     *     appConfigResource?: Shapes\ProjectAppConfigResourceConfig,
     *     description?: string,
     *     project: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
