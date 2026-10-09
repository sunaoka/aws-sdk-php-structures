<?php

namespace Sunaoka\Aws\Structures\EKS\CreateCapability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ArgoCdConfigRequest|null $argoCd
 * @property AckConfigRequest|null $ack
 */
class CapabilityConfigurationRequest extends Shape
{
    /**
     * @param array{
     *     argoCd?: ArgoCdConfigRequest|null,
     *     ack?: AckConfigRequest|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
