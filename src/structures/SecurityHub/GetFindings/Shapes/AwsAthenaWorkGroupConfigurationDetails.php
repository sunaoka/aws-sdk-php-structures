<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsAthenaWorkGroupConfigurationResultConfigurationDetails|null $ResultConfiguration
 */
class AwsAthenaWorkGroupConfigurationDetails extends Shape
{
    /**
     * @param array{ResultConfiguration?: AwsAthenaWorkGroupConfigurationResultConfigurationDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
