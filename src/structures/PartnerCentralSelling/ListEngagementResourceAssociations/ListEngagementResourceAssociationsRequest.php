<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementResourceAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string|null $CreatedBy
 * @property string|null $EngagementIdentifier
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $ResourceIdentifier
 * @property 'Opportunity'|null $ResourceType
 */
class ListEngagementResourceAssociationsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     CreatedBy?: string|null,
     *     EngagementIdentifier?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null,
     *     ResourceIdentifier?: string|null,
     *     ResourceType?: 'Opportunity'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
