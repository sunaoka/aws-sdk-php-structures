<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\UpdateRegistry\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoDetectionConfiguration $configuration
 * @property 'ACTIVE'|'INACTIVE' $status
 * @property string|null $statusReason
 */
class AutoDetection extends Shape
{
    /**
     * @param array{
     *     configuration: AutoDetectionConfiguration,
     *     status: 'ACTIVE'|'INACTIVE',
     *     statusReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
