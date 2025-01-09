<?php

namespace Sunaoka\Aws\Structures\Sfn\DescribeStateMachineAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stateMachineAliasArn
 */
class DescribeStateMachineAliasRequest extends Request
{
    /**
     * @param array{stateMachineAliasArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
