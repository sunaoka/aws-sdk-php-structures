<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectIdentifier
 * @property string|null $name
 * @property Shapes\ProjectDataRetention|null $dataRetention
 */
class UpdateProjectRequest extends Request
{
    /**
     * @param array{
     *     projectIdentifier: string,
     *     name?: string|null,
     *     dataRetention?: Shapes\ProjectDataRetention|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
