<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetEngagement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Aerospace'|'Agriculture'|'Automotive'|'Computers and Electronics'|'Consumer Goods'|'Education'|'Energy - Oil and Gas'|'Energy - Power and Utilities'|'Financial Services'|'Gaming'|'Government'|'Healthcare'|'Hospitality'|'Life Sciences'|'Manufacturing'|'Marketing and Advertising'|'Media and Entertainment'|'Mining'|'Non-Profit Organization'|'Professional Services'|'Real Estate and Construction'|'Retail'|'Software and Internet'|'Telecommunications'|'Transportation and Logistics'|'Travel'|'Wholesale and Distribution'|'Other'|null $Industry
 * @property string $CompanyName
 * @property string|null $WebsiteUrl
 * @property AddressSummary $Address
 * @property string|null $AwsMaturity
 * @property 'Enterprise'|'Large'|'Medium'|'Small'|'Micro'|null $MarketSegment
 */
class LeadCustomer extends Shape
{
    /**
     * @param array{
     *     Industry?: 'Aerospace'|'Agriculture'|'Automotive'|'Computers and Electronics'|'Consumer Goods'|'Education'|'Energy - Oil and Gas'|'Energy - Power and Utilities'|'Financial Services'|'Gaming'|'Government'|'Healthcare'|'Hospitality'|'Life Sciences'|'Manufacturing'|'Marketing and Advertising'|'Media and Entertainment'|'Mining'|'Non-Profit Organization'|'Professional Services'|'Real Estate and Construction'|'Retail'|'Software and Internet'|'Telecommunications'|'Transportation and Logistics'|'Travel'|'Wholesale and Distribution'|'Other'|null,
     *     CompanyName: string,
     *     WebsiteUrl?: string|null,
     *     Address: AddressSummary,
     *     AwsMaturity?: string|null,
     *     MarketSegment?: 'Enterprise'|'Large'|'Medium'|'Small'|'Micro'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
