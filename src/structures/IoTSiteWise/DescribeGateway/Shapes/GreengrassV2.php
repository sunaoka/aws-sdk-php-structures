<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $coreDeviceThingName
 */
class GreengrassV2 extends Shape
{
    /**
     * @param array{coreDeviceThingName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
