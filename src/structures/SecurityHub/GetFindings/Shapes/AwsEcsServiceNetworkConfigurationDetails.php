<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsEcsServiceNetworkConfigurationAwsVpcConfigurationDetails $AwsVpcConfiguration
 */
class AwsEcsServiceNetworkConfigurationDetails extends Shape
{
    /**
     * @param array{AwsVpcConfiguration?: AwsEcsServiceNetworkConfigurationAwsVpcConfigurationDetails} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
