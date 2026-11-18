<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\GetConnectorTelemetrySetup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\SetupArtifact> $Artifacts
 * @property list<string>|null $RequiredPermissionsToApply
 * @property 'BICEP' $Format
 * @property 'AZURE'|null $Provider
 * @property int|null $ManifestVersion
 */
class GetConnectorTelemetrySetupResponse extends Response
{
}
