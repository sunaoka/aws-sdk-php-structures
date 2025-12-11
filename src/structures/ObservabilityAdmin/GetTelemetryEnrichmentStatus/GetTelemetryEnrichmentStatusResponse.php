<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetTelemetryEnrichmentStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Running'|'Stopped'|'Impaired'|null $Status
 * @property string|null $AwsResourceExplorerManagedViewArn
 */
class GetTelemetryEnrichmentStatusResponse extends Response
{
}
