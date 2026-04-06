<?php

namespace Sunaoka\Aws\Structures\Rekognition\CreateProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectName
 */
class CreateProjectRequest extends Request
{
    /**
     * @param array{ProjectName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
