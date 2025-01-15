<?php

namespace Sunaoka\Aws\Structures\Tnb\CreateSolFunctionPackage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $id
 * @property 'CREATED'|'ONBOARDED'|'ERROR' $onboardingState
 * @property 'ENABLED'|'DISABLED' $operationalState
 * @property array<string, string>|null $tags
 * @property 'IN_USE'|'NOT_IN_USE' $usageState
 */
class CreateSolFunctionPackageResponse extends Response
{
}
