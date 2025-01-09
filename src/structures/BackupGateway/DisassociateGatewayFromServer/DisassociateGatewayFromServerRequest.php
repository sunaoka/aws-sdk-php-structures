<?php

namespace Sunaoka\Aws\Structures\BackupGateway\DisassociateGatewayFromServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayArn
 */
class DisassociateGatewayFromServerRequest extends Request
{
    /**
     * @param array{GatewayArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
