<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\UpdateBackendAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SmsMessage
 */
class SmsSettings extends Shape
{
    /**
     * @param array{SmsMessage?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
