<?php

namespace Sunaoka\Aws\Structures\IoT1ClickProjects\DeleteProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectName
 */
class DeleteProjectRequest extends Request
{
    /**
     * @param array{projectName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
