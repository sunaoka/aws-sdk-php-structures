<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $iotCoreThingName
 */
class SiemensIE extends Shape
{
    /**
     * @param array{iotCoreThingName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
