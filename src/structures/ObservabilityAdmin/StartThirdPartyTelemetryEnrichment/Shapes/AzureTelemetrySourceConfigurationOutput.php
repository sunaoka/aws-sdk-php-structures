<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\StartThirdPartyTelemetryEnrichment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AwsConfigConnectorArn
 * @property string|null $ServiceLinkedRecorderArn
 */
class AzureTelemetrySourceConfigurationOutput extends Shape
{
    /**
     * @param array{
     *     AwsConfigConnectorArn?: string|null,
     *     ServiceLinkedRecorderArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
