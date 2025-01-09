<?php

namespace Sunaoka\Aws\Structures\BackupGateway\AssociateGatewayToServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayArn
 * @property string $ServerArn
 */
class AssociateGatewayToServerRequest extends Request
{
    /**
     * @param array{
     *     GatewayArn: string,
     *     ServerArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
