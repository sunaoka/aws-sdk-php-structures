<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectName
 */
class DeleteProjectRequest extends Request
{
    /**
     * @param array{ProjectName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
