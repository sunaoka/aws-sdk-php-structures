<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DeregisterGatewayInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $Force
 * @property string $GatewayInstanceArn
 */
class DeregisterGatewayInstanceRequest extends Request
{
    /**
     * @param array{
     *     Force?: bool,
     *     GatewayInstanceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
