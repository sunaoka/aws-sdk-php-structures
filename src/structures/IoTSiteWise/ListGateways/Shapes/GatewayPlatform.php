<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Greengrass $greengrass
 * @property GreengrassV2 $greengrassV2
 * @property SiemensIE $siemensIE
 */
class GatewayPlatform extends Shape
{
    /**
     * @param array{
     *     greengrass?: Greengrass,
     *     greengrassV2?: GreengrassV2,
     *     siemensIE?: SiemensIE
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
