<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackRefactor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackRefactorId
 */
class DescribeStackRefactorRequest extends Request
{
    /**
     * @param array{StackRefactorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
