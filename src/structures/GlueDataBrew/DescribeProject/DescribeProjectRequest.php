<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DescribeProjectRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
