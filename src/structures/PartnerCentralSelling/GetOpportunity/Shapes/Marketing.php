<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetOpportunity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Yes'|'No' $AwsFundingUsed
 * @property string $CampaignName
 * @property list<'AWS Marketing Central'|'Content Syndication'|'Display'|'Email'|'Live Event'|'Out Of Home (OOH)'|'Print'|'Search'|'Social'|'Telemarketing'|'TV'|'Video'|'Virtual Event'> $Channels
 * @property 'Marketing Activity'|'None' $Source
 * @property list<string> $UseCases
 */
class Marketing extends Shape
{
    /**
     * @param array{
     *     AwsFundingUsed?: 'Yes'|'No',
     *     CampaignName?: string,
     *     Channels?: list<'AWS Marketing Central'|'Content Syndication'|'Display'|'Email'|'Live Event'|'Out Of Home (OOH)'|'Print'|'Search'|'Social'|'Telemarketing'|'TV'|'Video'|'Virtual Event'>,
     *     Source?: 'Marketing Activity'|'None',
     *     UseCases?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
