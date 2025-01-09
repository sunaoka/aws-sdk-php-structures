<?php

namespace Sunaoka\Aws\Structures\WorkSpacesThinClient\GetDevice;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class GetDeviceRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
