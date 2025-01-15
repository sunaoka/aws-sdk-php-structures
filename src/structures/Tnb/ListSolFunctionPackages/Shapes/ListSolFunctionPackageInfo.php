<?php

namespace Sunaoka\Aws\Structures\Tnb\ListSolFunctionPackages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $id
 * @property ListSolFunctionPackageMetadata|null $metadata
 * @property 'CREATED'|'ONBOARDED'|'ERROR' $onboardingState
 * @property 'ENABLED'|'DISABLED' $operationalState
 * @property 'IN_USE'|'NOT_IN_USE' $usageState
 * @property string|null $vnfProductName
 * @property string|null $vnfProvider
 * @property string|null $vnfdId
 * @property string|null $vnfdVersion
 */
class ListSolFunctionPackageInfo extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     id: string,
     *     metadata?: ListSolFunctionPackageMetadata|null,
     *     onboardingState: 'CREATED'|'ONBOARDED'|'ERROR',
     *     operationalState: 'ENABLED'|'DISABLED',
     *     usageState: 'IN_USE'|'NOT_IN_USE',
     *     vnfProductName?: string|null,
     *     vnfProvider?: string|null,
     *     vnfdId?: string|null,
     *     vnfdVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
