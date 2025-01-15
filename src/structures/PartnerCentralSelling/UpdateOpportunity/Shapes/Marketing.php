<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\UpdateOpportunity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Yes'|'No'|null $AwsFundingUsed
 * @property string|null $CampaignName
 * @property list<'AWS Marketing Central'|'Content Syndication'|'Display'|'Email'|'Live Event'|'Out Of Home (OOH)'|'Print'|'Search'|'Social'|'Telemarketing'|'TV'|'Video'|'Virtual Event'>|null $Channels
 * @property 'Marketing Activity'|'None'|null $Source
 * @property list<string>|null $UseCases
 */
class Marketing extends Shape
{
    /**
     * @param array{
     *     AwsFundingUsed?: 'Yes'|'No'|null,
     *     CampaignName?: string|null,
     *     Channels?: list<'AWS Marketing Central'|'Content Syndication'|'Display'|'Email'|'Live Event'|'Out Of Home (OOH)'|'Print'|'Search'|'Social'|'Telemarketing'|'TV'|'Video'|'Virtual Event'>|null,
     *     Source?: 'Marketing Activity'|'None'|null,
     *     UseCases?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
