<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DescribeProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectName
 */
class DescribeProjectRequest extends Request
{
    /**
     * @param array{ProjectName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
