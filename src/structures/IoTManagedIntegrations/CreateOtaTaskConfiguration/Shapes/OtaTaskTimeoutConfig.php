<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateOtaTaskConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 10080>|null $InProgressTimeoutInMinutes
 */
class OtaTaskTimeoutConfig extends Shape
{
    /**
     * @param array{InProgressTimeoutInMinutes?: int<1, 10080>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
