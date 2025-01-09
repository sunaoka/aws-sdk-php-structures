<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DeleteProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteProjectRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
