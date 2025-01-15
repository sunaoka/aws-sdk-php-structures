<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\DeregisterDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property 'DEREGISTERED'|'ARCHIVED'|null $targetDeviceStatus
 * @property string|null $clientToken
 */
class DeregisterDeviceRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     targetDeviceStatus?: 'DEREGISTERED'|'ARCHIVED'|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
