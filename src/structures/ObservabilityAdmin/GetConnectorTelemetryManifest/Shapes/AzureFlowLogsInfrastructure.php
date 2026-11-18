<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetConnectorTelemetryManifest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AzureCustomerManagedFlowLogs|null $CustomerManaged
 * @property AzureAwsManagedFlowLogs|null $AwsManaged
 */
class AzureFlowLogsInfrastructure extends Shape
{
    /**
     * @param array{
     *     CustomerManaged?: AzureCustomerManagedFlowLogs|null,
     *     AwsManaged?: AzureAwsManagedFlowLogs|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
