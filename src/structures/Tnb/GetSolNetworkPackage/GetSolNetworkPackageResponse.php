<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolNetworkPackage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $id
 * @property Shapes\GetSolNetworkPackageMetadata $metadata
 * @property string $nsdId
 * @property string $nsdName
 * @property 'CREATED'|'ONBOARDED'|'ERROR' $nsdOnboardingState
 * @property 'ENABLED'|'DISABLED' $nsdOperationalState
 * @property 'IN_USE'|'NOT_IN_USE' $nsdUsageState
 * @property string $nsdVersion
 * @property array<string, string>|null $tags
 * @property list<string> $vnfPkgIds
 */
class GetSolNetworkPackageResponse extends Response
{
}
