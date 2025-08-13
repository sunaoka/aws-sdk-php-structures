<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementResourceAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $EngagementIdentifier
 * @property 'Opportunity'|null $ResourceType
 * @property string|null $ResourceIdentifier
 * @property string|null $CreatedBy
 */
class ListEngagementResourceAssociationsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null,
     *     EngagementIdentifier?: string|null,
     *     ResourceType?: 'Opportunity'|null,
     *     ResourceIdentifier?: string|null,
     *     CreatedBy?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
