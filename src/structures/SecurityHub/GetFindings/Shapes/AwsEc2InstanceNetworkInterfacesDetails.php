<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NetworkInterfaceId
 */
class AwsEc2InstanceNetworkInterfacesDetails extends Shape
{
    /**
     * @param array{NetworkInterfaceId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
