<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceArn
 * @property string $ResourceId
 * @property string $AccountId
 * @property string $Region
 * @property 'Compute'|'Database'|'Storage'|'Code'|'AI/ML'|'Identity'|'Network'|'Other'|null $ResourceCategory
 * @property string|null $ResourceType
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
     *     ResourceArn?: string|null,
     *     ResourceId: string,
     *     AccountId: string,
     *     Region: string,
     *     ResourceCategory?: 'Compute'|'Database'|'Storage'|'Code'|'AI/ML'|'Identity'|'Network'|'Other'|null,
     *     ResourceType?: string|null,
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
