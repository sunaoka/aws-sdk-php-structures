<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\PutConnectorTelemetryManifest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AzureFlowLogStorageAccountScope> $StorageAccounts
 */
class AzureCustomerManagedFlowLogs extends Shape
{
    /**
     * @param array{StorageAccounts: list<AzureFlowLogStorageAccountScope>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
