<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\DeleteProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $project
 */
class DeleteProjectRequest extends Request
{
    /**
     * @param array{project: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
