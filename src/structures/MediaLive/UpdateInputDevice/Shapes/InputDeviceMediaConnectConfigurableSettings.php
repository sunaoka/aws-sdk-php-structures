<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateInputDevice\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FlowArn
 * @property string|null $RoleArn
 * @property string|null $SecretArn
 * @property string|null $SourceName
 */
class InputDeviceMediaConnectConfigurableSettings extends Shape
{
    /**
     * @param array{
     *     FlowArn?: string|null,
     *     RoleArn?: string|null,
     *     SecretArn?: string|null,
     *     SourceName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
