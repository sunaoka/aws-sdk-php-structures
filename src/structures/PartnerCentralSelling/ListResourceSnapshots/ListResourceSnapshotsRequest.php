<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListResourceSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $CreatedBy
 * @property string $EngagementIdentifier
 * @property int<1, 1000> $MaxResults
 * @property string $NextToken
 * @property string $ResourceIdentifier
 * @property string $ResourceSnapshotTemplateIdentifier
 * @property 'Opportunity' $ResourceType
 */
class ListResourceSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     CreatedBy?: string,
     *     EngagementIdentifier: string,
     *     MaxResults?: int<1, 1000>,
     *     NextToken?: string,
     *     ResourceIdentifier?: string,
     *     ResourceSnapshotTemplateIdentifier?: string,
     *     ResourceType?: 'Opportunity'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
