<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetResourceSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $EngagementIdentifier
 * @property 'Opportunity' $ResourceType
 * @property string $ResourceIdentifier
 * @property string $ResourceSnapshotTemplateIdentifier
 * @property int<1, max>|null $Revision
 */
class GetResourceSnapshotRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     EngagementIdentifier: string,
     *     ResourceType: 'Opportunity',
     *     ResourceIdentifier: string,
     *     ResourceSnapshotTemplateIdentifier: string,
     *     Revision?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
