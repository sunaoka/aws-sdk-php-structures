<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DescribeJobRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
