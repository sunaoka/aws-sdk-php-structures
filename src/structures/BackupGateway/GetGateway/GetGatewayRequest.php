<?php

namespace Sunaoka\Aws\Structures\BackupGateway\GetGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayArn
 */
class GetGatewayRequest extends Request
{
    /**
     * @param array{GatewayArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
