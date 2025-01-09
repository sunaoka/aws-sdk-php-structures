<?php

namespace Sunaoka\Aws\Structures\BackupGateway\UpdateGatewaySoftwareNow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GatewayArn
 */
class UpdateGatewaySoftwareNowRequest extends Request
{
    /**
     * @param array{GatewayArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
