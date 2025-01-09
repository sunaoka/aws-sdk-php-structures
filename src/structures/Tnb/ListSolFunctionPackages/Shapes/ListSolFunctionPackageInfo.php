<?php

namespace Sunaoka\Aws\Structures\Tnb\ListSolFunctionPackages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $id
 * @property ListSolFunctionPackageMetadata $metadata
 * @property 'CREATED'|'ONBOARDED'|'ERROR' $onboardingState
 * @property 'ENABLED'|'DISABLED' $operationalState
 * @property 'IN_USE'|'NOT_IN_USE' $usageState
 * @property string $vnfProductName
 * @property string $vnfProvider
 * @property string $vnfdId
 * @property string $vnfdVersion
 */
class ListSolFunctionPackageInfo extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     id: string,
     *     metadata?: ListSolFunctionPackageMetadata,
     *     onboardingState: 'CREATED'|'ONBOARDED'|'ERROR',
     *     operationalState: 'ENABLED'|'DISABLED',
     *     usageState: 'IN_USE'|'NOT_IN_USE',
     *     vnfProductName?: string,
     *     vnfProvider?: string,
     *     vnfdId?: string,
     *     vnfdVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
