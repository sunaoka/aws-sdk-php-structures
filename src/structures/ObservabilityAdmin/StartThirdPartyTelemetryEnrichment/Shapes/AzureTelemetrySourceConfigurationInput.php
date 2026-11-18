<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\StartThirdPartyTelemetryEnrichment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AwsConfigConnectorArn
 */
class AzureTelemetrySourceConfigurationInput extends Shape
{
    /**
     * @param array{AwsConfigConnectorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
