<?php

namespace Sunaoka\Aws\Structures\PcaConnectorScep\GetConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IntuneConfiguration $Intune
 */
class MobileDeviceManagement extends Shape
{
    /**
     * @param array{Intune?: IntuneConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
