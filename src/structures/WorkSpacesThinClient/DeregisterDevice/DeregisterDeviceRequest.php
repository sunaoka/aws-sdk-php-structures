<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\DeregisterDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property 'DEREGISTERED'|'ARCHIVED' $targetDeviceStatus
 * @property string $clientToken
 */
class DeregisterDeviceRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     targetDeviceStatus?: 'DEREGISTERED'|'ARCHIVED',
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
