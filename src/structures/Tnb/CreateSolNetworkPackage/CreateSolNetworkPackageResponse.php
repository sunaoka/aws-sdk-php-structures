<?php

namespace Sunaoka\Aws\Structures\Tnb\CreateSolNetworkPackage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $id
 * @property 'CREATED'|'ONBOARDED'|'ERROR' $nsdOnboardingState
 * @property 'ENABLED'|'DISABLED' $nsdOperationalState
 * @property 'IN_USE'|'NOT_IN_USE' $nsdUsageState
 * @property array<string, string>|null $tags
 */
class CreateSolNetworkPackageResponse extends Response
{
}
