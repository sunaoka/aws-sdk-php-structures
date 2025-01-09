<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\ListDomainDeliverabilityCampaigns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CampaignId
 * @property string $ImageUrl
 * @property string $Subject
 * @property string $FromAddress
 * @property list<string> $SendingIps
 * @property \Aws\Api\DateTimeResult $FirstSeenDateTime
 * @property \Aws\Api\DateTimeResult $LastSeenDateTime
 * @property int $InboxCount
 * @property int $SpamCount
 * @property double $ReadRate
 * @property double $DeleteRate
 * @property double $ReadDeleteRate
 * @property int $ProjectedVolume
 * @property list<string> $Esps
 */
class DomainDeliverabilityCampaign extends Shape
{
    /**
     * @param array{
     *     CampaignId?: string,
     *     ImageUrl?: string,
     *     Subject?: string,
     *     FromAddress?: string,
     *     SendingIps?: list<string>,
     *     FirstSeenDateTime?: \Aws\Api\DateTimeResult,
     *     LastSeenDateTime?: \Aws\Api\DateTimeResult,
     *     InboxCount?: int,
     *     SpamCount?: int,
     *     ReadRate?: double,
     *     DeleteRate?: double,
     *     ReadDeleteRate?: double,
     *     ProjectedVolume?: int,
     *     Esps?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
