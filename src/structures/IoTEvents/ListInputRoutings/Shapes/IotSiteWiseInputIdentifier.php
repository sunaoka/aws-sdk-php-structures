<?php

namespace Sunaoka\Aws\Structures\IoTEvents\ListInputRoutings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IotSiteWiseAssetModelPropertyIdentifier|null $iotSiteWiseAssetModelPropertyIdentifier
 */
class IotSiteWiseInputIdentifier extends Shape
{
    /**
     * @param array{iotSiteWiseAssetModelPropertyIdentifier?: IotSiteWiseAssetModelPropertyIdentifier|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
