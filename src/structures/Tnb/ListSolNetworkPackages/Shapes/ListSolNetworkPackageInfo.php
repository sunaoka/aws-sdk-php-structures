<?php

namespace Sunaoka\Aws\Structures\Tnb\ListSolNetworkPackages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $id
 * @property ListSolNetworkPackageMetadata $metadata
 * @property string|null $nsdDesigner
 * @property string|null $nsdId
 * @property string|null $nsdInvariantId
 * @property string|null $nsdName
 * @property 'CREATED'|'ONBOARDED'|'ERROR' $nsdOnboardingState
 * @property 'ENABLED'|'DISABLED' $nsdOperationalState
 * @property 'IN_USE'|'NOT_IN_USE' $nsdUsageState
 * @property string|null $nsdVersion
 * @property list<string>|null $vnfPkgIds
 */
class ListSolNetworkPackageInfo extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     id: string,
     *     metadata: ListSolNetworkPackageMetadata,
     *     nsdDesigner?: string|null,
     *     nsdId?: string|null,
     *     nsdInvariantId?: string|null,
     *     nsdName?: string|null,
     *     nsdOnboardingState: 'CREATED'|'ONBOARDED'|'ERROR',
     *     nsdOperationalState: 'ENABLED'|'DISABLED',
     *     nsdUsageState: 'IN_USE'|'NOT_IN_USE',
     *     nsdVersion?: string|null,
     *     vnfPkgIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
