<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolFunctionPackage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $id
 * @property Shapes\GetSolFunctionPackageMetadata $metadata
 * @property 'CREATED'|'ONBOARDED'|'ERROR' $onboardingState
 * @property 'ENABLED'|'DISABLED' $operationalState
 * @property array<string, string> $tags
 * @property 'IN_USE'|'NOT_IN_USE' $usageState
 * @property string $vnfProductName
 * @property string $vnfProvider
 * @property string $vnfdId
 * @property string $vnfdVersion
 */
class GetSolFunctionPackageResponse extends Response
{
}
