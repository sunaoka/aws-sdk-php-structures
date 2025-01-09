<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListInputDevices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FlowArn
 * @property string $RoleArn
 * @property string $SecretArn
 * @property string $SourceName
 */
class InputDeviceMediaConnectSettings extends Shape
{
    /**
     * @param array{
     *     FlowArn?: string,
     *     RoleArn?: string,
     *     SecretArn?: string,
     *     SourceName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
