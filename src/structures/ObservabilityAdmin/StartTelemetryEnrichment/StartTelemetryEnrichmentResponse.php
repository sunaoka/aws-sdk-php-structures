<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\StartTelemetryEnrichment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Running'|'Stopped'|'Impaired'|null $Status
 * @property string|null $AwsResourceExplorerManagedViewArn
 */
class StartTelemetryEnrichmentResponse extends Response
{
}
