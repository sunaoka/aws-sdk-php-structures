<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeContext;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContextName
 */
class DescribeContextRequest extends Request
{
    /**
     * @param array{ContextName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
