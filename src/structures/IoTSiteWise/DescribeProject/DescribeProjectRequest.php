<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectId
 */
class DescribeProjectRequest extends Request
{
    /**
     * @param array{projectId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
