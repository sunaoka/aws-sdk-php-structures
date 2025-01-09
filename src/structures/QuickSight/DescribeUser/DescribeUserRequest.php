<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeUser;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string $AwsAccountId
 * @property string $Namespace
 */
class DescribeUserRequest extends Request
{
    /**
     * @param array{
     *     UserName: string,
     *     AwsAccountId: string,
     *     Namespace: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
