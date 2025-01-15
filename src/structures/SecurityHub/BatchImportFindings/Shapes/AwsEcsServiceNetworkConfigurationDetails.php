<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsEcsServiceNetworkConfigurationAwsVpcConfigurationDetails|null $AwsVpcConfiguration
 */
class AwsEcsServiceNetworkConfigurationDetails extends Shape
{
    /**
     * @param array{AwsVpcConfiguration?: AwsEcsServiceNetworkConfigurationAwsVpcConfigurationDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
