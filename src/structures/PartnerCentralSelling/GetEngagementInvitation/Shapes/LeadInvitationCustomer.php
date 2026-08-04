<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetEngagementInvitation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Industry
 * @property string $CompanyName
 * @property string|null $WebsiteUrl
 * @property string|null $CountryCode
 * @property string|null $AwsMaturity
 * @property string|null $MarketSegment
 */
class LeadInvitationCustomer extends Shape
{
    /**
     * @param array{
     *     Industry?: string|null,
     *     CompanyName: string,
     *     WebsiteUrl?: string|null,
     *     CountryCode?: string|null,
     *     AwsMaturity?: string|null,
     *     MarketSegment?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
