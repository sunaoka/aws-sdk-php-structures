<?php

namespace Sunaoka\Aws\Structures\Mobile\DeleteProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectId
 */
class DeleteProjectRequest extends Request
{
    /**
     * @param array{projectId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
