<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property string $AwsAccountId
 * @property string $Namespace
 */
class DescribeGroupRequest extends Request
{
    /**
     * @param array{
     *     GroupName: string,
     *     AwsAccountId: string,
     *     Namespace: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
