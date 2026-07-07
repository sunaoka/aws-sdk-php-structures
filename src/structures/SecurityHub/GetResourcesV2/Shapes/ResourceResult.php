<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceGuid
 * @property string $ResourceId
 * @property string $AccountId
 * @property string|null $AccountName
 * @property string $Region
 * @property string|null $ResourceProvider
 * @property string|null $ResourceOwnerAccountId
 * @property string|null $ResourceOwnerOrgId
 * @property string|null $ResourceCloudPartition
 * @property string|null $ResourceRegion
 * @property 'Compute'|'Database'|'Storage'|'Code'|'AI/ML'|'Identity'|'Network'|'Messaging'|'Other'|null $ResourceCategory
 * @property string $ResourceType
 * @property string|null $ResourceName
 * @property string|null $ResourceCreationTimeDt
 * @property string $ResourceDetailCaptureTimeDt
 * @property list<ResourceFindingsSummary>|null $FindingsSummary
 * @property list<ResourceTag>|null $ResourceTags
 * @property ResourceConfig $ResourceConfig
 */
class ResourceResult extends Shape
{
    /**
     * @param array{
     *     ResourceGuid?: string|null,
     *     ResourceId: string,
     *     AccountId: string,
     *     AccountName?: string|null,
     *     Region: string,
     *     ResourceProvider?: string|null,
     *     ResourceOwnerAccountId?: string|null,
     *     ResourceOwnerOrgId?: string|null,
     *     ResourceCloudPartition?: string|null,
     *     ResourceRegion?: string|null,
     *     ResourceCategory?: 'Compute'|'Database'|'Storage'|'Code'|'AI/ML'|'Identity'|'Network'|'Messaging'|'Other'|null,
     *     ResourceType: string,
     *     ResourceName?: string|null,
     *     ResourceCreationTimeDt?: string|null,
     *     ResourceDetailCaptureTimeDt: string,
     *     FindingsSummary?: list<ResourceFindingsSummary>|null,
     *     ResourceTags?: list<ResourceTag>|null,
     *     ResourceConfig: ResourceConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
