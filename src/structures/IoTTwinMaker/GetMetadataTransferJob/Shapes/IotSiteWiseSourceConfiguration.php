<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetMetadataTransferJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<IotSiteWiseSourceConfigurationFilter>|null $filters
 */
class IotSiteWiseSourceConfiguration extends Shape
{
    /**
     * @param array{filters?: list<IotSiteWiseSourceConfigurationFilter>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
