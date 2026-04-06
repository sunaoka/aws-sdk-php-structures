<?php

namespace Sunaoka\Aws\Structures\Wickr\ListDevicesForUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $appId
 * @property string|null $created
 * @property string|null $lastLogin
 * @property string|null $statusText
 * @property bool|null $suspend
 * @property string|null $type
 */
class BasicDeviceObject extends Shape
{
    /**
     * @param array{
     *     appId?: string|null,
     *     created?: string|null,
     *     lastLogin?: string|null,
     *     statusText?: string|null,
     *     suspend?: bool|null,
     *     type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
