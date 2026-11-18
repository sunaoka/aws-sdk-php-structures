<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GcpCapabilityScope|null $vmScanning
 * @property GcpCapabilityScope|null $containerImageScanning
 * @property GcpCapabilityScope|null $serverlessScanning
 */
class GcpScopeConfiguration extends Shape
{
    /**
     * @param array{
     *     vmScanning?: GcpCapabilityScope|null,
     *     containerImageScanning?: GcpCapabilityScope|null,
     *     serverlessScanning?: GcpCapabilityScope|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
