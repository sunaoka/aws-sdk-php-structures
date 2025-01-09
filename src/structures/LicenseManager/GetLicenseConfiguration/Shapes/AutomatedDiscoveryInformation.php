<?php

namespace Sunaoka\Aws\Structures\LicenseManager\GetLicenseConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $LastRunTime
 */
class AutomatedDiscoveryInformation extends Shape
{
    /**
     * @param array{LastRunTime?: \Aws\Api\DateTimeResult} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
