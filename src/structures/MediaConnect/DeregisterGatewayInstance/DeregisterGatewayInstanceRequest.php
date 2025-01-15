<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DeregisterGatewayInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $Force
 * @property string $GatewayInstanceArn
 */
class DeregisterGatewayInstanceRequest extends Request
{
    /**
     * @param array{
     *     Force?: bool|null,
     *     GatewayInstanceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
