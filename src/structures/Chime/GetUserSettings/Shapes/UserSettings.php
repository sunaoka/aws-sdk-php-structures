<?php

namespace Sunaoka\Aws\Structures\Chime\GetUserSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TelephonySettings $Telephony
 */
class UserSettings extends Shape
{
    /**
     * @param array{Telephony: TelephonySettings} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
