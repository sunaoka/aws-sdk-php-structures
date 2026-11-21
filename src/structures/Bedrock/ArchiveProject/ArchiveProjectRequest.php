<?php

namespace Sunaoka\Aws\Structures\Bedrock\ArchiveProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectIdentifier
 */
class ArchiveProjectRequest extends Request
{
    /**
     * @param array{projectIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
