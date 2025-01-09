<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\DescribeApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 */
class DescribeAppRequest extends Request
{
    /**
     * @param array{appArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
