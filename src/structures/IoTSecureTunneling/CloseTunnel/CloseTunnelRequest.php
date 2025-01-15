<?php

namespace Sunaoka\Aws\Structures\IoTSecureTunneling\CloseTunnel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tunnelId
 * @property bool|null $delete
 */
class CloseTunnelRequest extends Request
{
    /**
     * @param array{
     *     tunnelId: string,
     *     delete?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
