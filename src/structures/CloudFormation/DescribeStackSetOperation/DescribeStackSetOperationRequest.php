<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackSetOperation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackSetName
 * @property string $OperationId
 * @property 'SELF'|'DELEGATED_ADMIN'|null $CallAs
 */
class DescribeStackSetOperationRequest extends Request
{
    /**
     * @param array{
     *     StackSetName: string,
     *     OperationId: string,
     *     CallAs?: 'SELF'|'DELEGATED_ADMIN'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
