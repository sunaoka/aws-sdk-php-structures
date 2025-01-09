<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackSet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackSetName
 * @property 'SELF'|'DELEGATED_ADMIN' $CallAs
 */
class DescribeStackSetRequest extends Request
{
    /**
     * @param array{
     *     StackSetName: string,
     *     CallAs?: 'SELF'|'DELEGATED_ADMIN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
