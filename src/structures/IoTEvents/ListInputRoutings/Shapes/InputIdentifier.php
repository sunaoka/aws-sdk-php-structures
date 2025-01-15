<?php

namespace Sunaoka\Aws\Structures\IoTEvents\ListInputRoutings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IotEventsInputIdentifier|null $iotEventsInputIdentifier
 * @property IotSiteWiseInputIdentifier|null $iotSiteWiseInputIdentifier
 */
class InputIdentifier extends Shape
{
    /**
     * @param array{
     *     iotEventsInputIdentifier?: IotEventsInputIdentifier|null,
     *     iotSiteWiseInputIdentifier?: IotSiteWiseInputIdentifier|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
