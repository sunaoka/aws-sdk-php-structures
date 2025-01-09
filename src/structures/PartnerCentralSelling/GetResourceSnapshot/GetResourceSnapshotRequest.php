<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetResourceSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $EngagementIdentifier
 * @property string $ResourceIdentifier
 * @property string $ResourceSnapshotTemplateIdentifier
 * @property 'Opportunity' $ResourceType
 * @property int $Revision
 */
class GetResourceSnapshotRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     EngagementIdentifier: string,
     *     ResourceIdentifier: string,
     *     ResourceSnapshotTemplateIdentifier: string,
     *     ResourceType: 'Opportunity',
     *     Revision?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
