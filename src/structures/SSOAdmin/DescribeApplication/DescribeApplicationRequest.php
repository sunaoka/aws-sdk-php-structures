<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeApplication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationArn
 */
class DescribeApplicationRequest extends Request
{
    /**
     * @param array{ApplicationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
