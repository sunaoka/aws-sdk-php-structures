<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateEngagementContext\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Industry
 * @property string $CompanyName
 * @property string|null $WebsiteUrl
 * @property LeadAddress|null $Address
 * @property string|null $AwsMaturity
 * @property string|null $MarketSegment
 */
class LeadCustomer extends Shape
{
    /**
     * @param array{
     *     Industry?: string|null,
     *     CompanyName: string,
     *     WebsiteUrl?: string|null,
     *     Address?: LeadAddress|null,
     *     AwsMaturity?: string|null,
     *     MarketSegment?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
