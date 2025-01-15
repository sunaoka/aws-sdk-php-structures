<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolFunctionPackage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $id
 * @property Shapes\GetSolFunctionPackageMetadata|null $metadata
 * @property 'CREATED'|'ONBOARDED'|'ERROR' $onboardingState
 * @property 'ENABLED'|'DISABLED' $operationalState
 * @property array<string, string>|null $tags
 * @property 'IN_USE'|'NOT_IN_USE' $usageState
 * @property string|null $vnfProductName
 * @property string|null $vnfProvider
 * @property string|null $vnfdId
 * @property string|null $vnfdVersion
 */
class GetSolFunctionPackageResponse extends Response
{
}
