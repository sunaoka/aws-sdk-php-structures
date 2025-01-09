<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteVPCConnection;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $VPCConnectionId
 */
class DeleteVPCConnectionRequest extends Request
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
