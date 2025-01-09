<?php

namespace Sunaoka\Aws\Structures\CodeBuild\DeleteProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 */
class DeleteProjectRequest extends Request
{
    /**
     * @param array{name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
