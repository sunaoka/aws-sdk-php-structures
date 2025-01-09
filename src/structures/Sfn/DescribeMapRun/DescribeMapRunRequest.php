<?php

namespace Sunaoka\Aws\Structures\Sfn\DescribeMapRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $mapRunArn
 */
class DescribeMapRunRequest extends Request
{
    /**
     * @param array{mapRunArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
