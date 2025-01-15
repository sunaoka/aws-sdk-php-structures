<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackSetName
 * @property string $StackInstanceAccount
 * @property string $StackInstanceRegion
 * @property 'SELF'|'DELEGATED_ADMIN'|null $CallAs
 */
class DescribeStackInstanceRequest extends Request
{
    /**
     * @param array{
     *     StackSetName: string,
     *     StackInstanceAccount: string,
     *     StackInstanceRegion: string,
     *     CallAs?: 'SELF'|'DELEGATED_ADMIN'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
