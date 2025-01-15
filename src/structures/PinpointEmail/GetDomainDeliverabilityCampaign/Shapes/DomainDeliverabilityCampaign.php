<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetDomainDeliverabilityCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CampaignId
 * @property string|null $ImageUrl
 * @property string|null $Subject
 * @property string|null $FromAddress
 * @property list<string>|null $SendingIps
 * @property \Aws\Api\DateTimeResult|null $FirstSeenDateTime
 * @property \Aws\Api\DateTimeResult|null $LastSeenDateTime
 * @property int|null $InboxCount
 * @property int|null $SpamCount
 * @property double|null $ReadRate
 * @property double|null $DeleteRate
 * @property double|null $ReadDeleteRate
 * @property int|null $ProjectedVolume
 * @property list<string>|null $Esps
 */
class DomainDeliverabilityCampaign extends Shape
{
    /**
     * @param array{
     *     CampaignId?: string|null,
     *     ImageUrl?: string|null,
     *     Subject?: string|null,
     *     FromAddress?: string|null,
     *     SendingIps?: list<string>|null,
     *     FirstSeenDateTime?: \Aws\Api\DateTimeResult|null,
     *     LastSeenDateTime?: \Aws\Api\DateTimeResult|null,
     *     InboxCount?: int|null,
     *     SpamCount?: int|null,
     *     ReadRate?: double|null,
     *     DeleteRate?: double|null,
     *     ReadDeleteRate?: double|null,
     *     ProjectedVolume?: int|null,
     *     Esps?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
