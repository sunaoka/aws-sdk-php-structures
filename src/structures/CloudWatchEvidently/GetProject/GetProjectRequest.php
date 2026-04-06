<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\GetProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $project
 */
class GetProjectRequest extends Request
{
    /**
     * @param array{project: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
