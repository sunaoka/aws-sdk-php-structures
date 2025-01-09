<?php

namespace Sunaoka\Aws\Structures\Backup\DescribeProtectedResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 */
class DescribeProtectedResourceRequest extends Request
{
    /**
     * @param array{ResourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
