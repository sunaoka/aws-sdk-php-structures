<?php

namespace Sunaoka\Aws\Structures\SesV2\SendEmail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TrackingConfigurationOverrides|null $Tracking
 */
class ConfigurationOverrides extends Shape
{
    /**
     * @param array{Tracking?: TrackingConfigurationOverrides|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
