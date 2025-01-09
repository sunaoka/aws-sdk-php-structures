<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetTestGridProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectArn
 */
class GetTestGridProjectRequest extends Request
{
    /**
     * @param array{projectArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
