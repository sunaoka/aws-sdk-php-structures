<?php

namespace Sunaoka\Aws\Structures\IoT1ClickProjects\DescribeProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectName
 */
class DescribeProjectRequest extends Request
{
    /**
     * @param array{projectName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
