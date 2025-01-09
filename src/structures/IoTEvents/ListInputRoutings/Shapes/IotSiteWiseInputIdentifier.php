<?php

namespace Sunaoka\Aws\Structures\IoTEvents\ListInputRoutings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IotSiteWiseAssetModelPropertyIdentifier $iotSiteWiseAssetModelPropertyIdentifier
 */
class IotSiteWiseInputIdentifier extends Shape
{
    /**
     * @param array{iotSiteWiseAssetModelPropertyIdentifier?: IotSiteWiseAssetModelPropertyIdentifier} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
