<?php

namespace Sunaoka\Aws\Structures\Tnb\ListSolNetworkPackages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $id
 * @property ListSolNetworkPackageMetadata $metadata
 * @property string $nsdDesigner
 * @property string $nsdId
 * @property string $nsdInvariantId
 * @property string $nsdName
 * @property 'CREATED'|'ONBOARDED'|'ERROR' $nsdOnboardingState
 * @property 'ENABLED'|'DISABLED' $nsdOperationalState
 * @property 'IN_USE'|'NOT_IN_USE' $nsdUsageState
 * @property string $nsdVersion
 * @property list<string> $vnfPkgIds
 */
class ListSolNetworkPackageInfo extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     id: string,
     *     metadata: ListSolNetworkPackageMetadata,
     *     nsdDesigner?: string,
     *     nsdId?: string,
     *     nsdInvariantId?: string,
     *     nsdName?: string,
     *     nsdOnboardingState: 'CREATED'|'ONBOARDED'|'ERROR',
     *     nsdOperationalState: 'ENABLED'|'DISABLED',
     *     nsdUsageState: 'IN_USE'|'NOT_IN_USE',
     *     nsdVersion?: string,
     *     vnfPkgIds?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
