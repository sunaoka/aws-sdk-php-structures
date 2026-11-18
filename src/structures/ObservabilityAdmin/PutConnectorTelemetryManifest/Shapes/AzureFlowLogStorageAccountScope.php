<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\PutConnectorTelemetryManifest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Region
 * @property list<string> $StorageAccountIds
 */
class AzureFlowLogStorageAccountScope extends Shape
{
    /**
     * @param array{
     *     Region: string,
     *     StorageAccountIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
