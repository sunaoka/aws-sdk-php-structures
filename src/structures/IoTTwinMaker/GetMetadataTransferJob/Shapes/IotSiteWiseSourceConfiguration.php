<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetMetadataTransferJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<IotSiteWiseSourceConfigurationFilter> $filters
 */
class IotSiteWiseSourceConfiguration extends Shape
{
    /**
     * @param array{filters?: list<IotSiteWiseSourceConfigurationFilter>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
