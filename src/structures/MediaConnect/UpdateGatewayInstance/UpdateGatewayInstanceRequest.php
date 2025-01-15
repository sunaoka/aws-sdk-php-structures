<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateGatewayInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AVAILABLE'|'LOCKED'|null $BridgePlacement
 * @property string $GatewayInstanceArn
 */
class UpdateGatewayInstanceRequest extends Request
{
    /**
     * @param array{
     *     BridgePlacement?: 'AVAILABLE'|'LOCKED'|null,
     *     GatewayInstanceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
