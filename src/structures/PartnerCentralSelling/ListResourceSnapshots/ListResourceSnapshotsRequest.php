<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListResourceSnapshots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string|null $CreatedBy
 * @property string $EngagementIdentifier
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $ResourceIdentifier
 * @property string|null $ResourceSnapshotTemplateIdentifier
 * @property 'Opportunity'|null $ResourceType
 */
class ListResourceSnapshotsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     CreatedBy?: string|null,
     *     EngagementIdentifier: string,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null,
     *     ResourceIdentifier?: string|null,
     *     ResourceSnapshotTemplateIdentifier?: string|null,
     *     ResourceType?: 'Opportunity'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
