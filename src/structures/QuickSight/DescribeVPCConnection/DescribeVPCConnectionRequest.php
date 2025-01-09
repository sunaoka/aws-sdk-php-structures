<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeVPCConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $VPCConnectionId
 */
class DescribeVPCConnectionRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     VPCConnectionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
