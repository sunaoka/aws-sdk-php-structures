<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\DeleteDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $clientToken
 */
class DeleteDeviceRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
