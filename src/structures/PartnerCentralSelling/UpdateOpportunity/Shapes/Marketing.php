<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\UpdateOpportunity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CampaignName
 * @property 'Marketing Activity'|'None'|null $Source
 * @property list<string>|null $UseCases
 * @property list<'AWS Marketing Central'|'Content Syndication'|'Display'|'Email'|'Live Event'|'Out Of Home (OOH)'|'Print'|'Search'|'Social'|'Telemarketing'|'TV'|'Video'|'Virtual Event'>|null $Channels
 * @property 'Yes'|'No'|null $AwsFundingUsed
 */
class Marketing extends Shape
{
    /**
     * @param array{
     *     CampaignName?: string|null,
     *     Source?: 'Marketing Activity'|'None'|null,
     *     UseCases?: list<string>|null,
     *     Channels?: list<'AWS Marketing Central'|'Content Syndication'|'Display'|'Email'|'Live Event'|'Out Of Home (OOH)'|'Print'|'Search'|'Social'|'Telemarketing'|'TV'|'Video'|'Virtual Event'>|null,
     *     AwsFundingUsed?: 'Yes'|'No'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
