<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateConfigurationSetEventDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CloudWatchDimensionConfiguration> $DimensionConfigurations
 */
class CloudWatchDestination extends Shape
{
    /**
     * @param array{DimensionConfigurations: list<CloudWatchDimensionConfiguration>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
