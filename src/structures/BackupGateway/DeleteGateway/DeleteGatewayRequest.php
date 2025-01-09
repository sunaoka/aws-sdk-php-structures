<?php

namespace Sunaoka\Aws\Structures\BackupGateway\DeleteGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayArn
 */
class DeleteGatewayRequest extends Request
{
    /**
     * @param array{GatewayArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
