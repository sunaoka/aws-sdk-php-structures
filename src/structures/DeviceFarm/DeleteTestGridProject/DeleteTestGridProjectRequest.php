<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\DeleteTestGridProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectArn
 */
class DeleteTestGridProjectRequest extends Request
{
    /**
     * @param array{projectArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
