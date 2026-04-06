<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ExecuteStackRefactor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackRefactorId
 */
class ExecuteStackRefactorRequest extends Request
{
    /**
     * @param array{StackRefactorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
