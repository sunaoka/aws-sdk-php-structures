<?php

namespace Sunaoka\Aws\Structures\Rekognition\DeleteProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectArn
 */
class DeleteProjectRequest extends Request
{
    /**
     * @param array{ProjectArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
