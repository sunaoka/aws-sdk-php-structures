<?php

namespace Sunaoka\Aws\Structures\IoTEvents\UpdateAlarmModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SSOIdentity $ssoIdentity
 */
class RecipientDetail extends Shape
{
    /**
     * @param array{ssoIdentity?: SSOIdentity} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
