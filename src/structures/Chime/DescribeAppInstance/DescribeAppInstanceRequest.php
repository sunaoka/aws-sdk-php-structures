<?php

namespace Sunaoka\Aws\Structures\Chime\DescribeAppInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AppInstanceArn
 */
class DescribeAppInstanceRequest extends Request
{
    /**
     * @param array{AppInstanceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
