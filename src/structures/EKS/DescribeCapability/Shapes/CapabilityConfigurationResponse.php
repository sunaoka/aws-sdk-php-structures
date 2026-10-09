<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeCapability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ArgoCdConfigResponse|null $argoCd
 * @property AckConfigResponse|null $ack
 */
class CapabilityConfigurationResponse extends Shape
{
    /**
     * @param array{
     *     argoCd?: ArgoCdConfigResponse|null,
     *     ack?: AckConfigResponse|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
