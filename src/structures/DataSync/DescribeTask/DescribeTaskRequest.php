<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TaskArn
 */
class DescribeTaskRequest extends Request
{
    /**
     * @param array{TaskArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
