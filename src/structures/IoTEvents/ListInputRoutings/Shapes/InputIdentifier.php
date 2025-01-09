<?php

namespace Sunaoka\Aws\Structures\IoTEvents\ListInputRoutings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IotEventsInputIdentifier $iotEventsInputIdentifier
 * @property IotSiteWiseInputIdentifier $iotSiteWiseInputIdentifier
 */
class InputIdentifier extends Shape
{
    /**
     * @param array{
     *     iotEventsInputIdentifier?: IotEventsInputIdentifier,
     *     iotSiteWiseInputIdentifier?: IotSiteWiseInputIdentifier
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
