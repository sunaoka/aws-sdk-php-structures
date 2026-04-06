<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Greengrass|null $greengrass
 * @property GreengrassV2|null $greengrassV2
 */
class GatewayPlatform extends Shape
{
    /**
     * @param array{
     *     greengrass?: Greengrass|null,
     *     greengrassV2?: GreengrassV2|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
