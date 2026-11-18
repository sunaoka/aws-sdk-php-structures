<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\PutConnectorTelemetryManifest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Region
 * @property list<string> $ResourceIds
 */
class AzureResourceIdScope extends Shape
{
    /**
     * @param array{
     *     Region: string,
     *     ResourceIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
