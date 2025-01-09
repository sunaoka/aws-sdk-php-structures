<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListEngagementResourceAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Catalog
 * @property string $CreatedBy
 * @property string $EngagementIdentifier
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $ResourceIdentifier
 * @property 'Opportunity' $ResourceType
 */
class ListEngagementResourceAssociationsRequest extends Request
{
    /**
     * @param array{
     *     Catalog: string,
     *     CreatedBy?: string,
     *     EngagementIdentifier?: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     ResourceIdentifier?: string,
     *     ResourceType?: 'Opportunity'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
