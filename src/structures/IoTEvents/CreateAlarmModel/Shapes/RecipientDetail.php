<?php

namespace Sunaoka\Aws\Structures\IoTEvents\CreateAlarmModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SSOIdentity|null $ssoIdentity
 */
class RecipientDetail extends Shape
{
    /**
     * @param array{ssoIdentity?: SSOIdentity|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
