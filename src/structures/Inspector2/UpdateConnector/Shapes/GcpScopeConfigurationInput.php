<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GcpCapabilityScopeInput|null $vmScanning
 * @property GcpCapabilityScopeInput|null $containerImageScanning
 * @property GcpCapabilityScopeInput|null $serverlessScanning
 */
class GcpScopeConfigurationInput extends Shape
{
    /**
     * @param array{
     *     vmScanning?: GcpCapabilityScopeInput|null,
     *     containerImageScanning?: GcpCapabilityScopeInput|null,
     *     serverlessScanning?: GcpCapabilityScopeInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
