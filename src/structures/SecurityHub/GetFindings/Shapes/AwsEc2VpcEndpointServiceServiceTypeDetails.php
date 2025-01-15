<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServiceType
 */
class AwsEc2VpcEndpointServiceServiceTypeDetails extends Shape
{
    /**
     * @param array{ServiceType?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
