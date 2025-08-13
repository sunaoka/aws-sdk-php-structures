<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListOpportunities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Aerospace'|'Agriculture'|'Automotive'|'Computers and Electronics'|'Consumer Goods'|'Education'|'Energy - Oil and Gas'|'Energy - Power and Utilities'|'Financial Services'|'Gaming'|'Government'|'Healthcare'|'Hospitality'|'Life Sciences'|'Manufacturing'|'Marketing and Advertising'|'Media and Entertainment'|'Mining'|'Non-Profit Organization'|'Professional Services'|'Real Estate and Construction'|'Retail'|'Software and Internet'|'Telecommunications'|'Transportation and Logistics'|'Travel'|'Wholesale and Distribution'|'Other'|null $Industry
 * @property string|null $OtherIndustry
 * @property string $CompanyName
 * @property string|null $WebsiteUrl
 * @property AddressSummary|null $Address
 */
class AccountSummary extends Shape
{
    /**
     * @param array{
     *     Industry?: 'Aerospace'|'Agriculture'|'Automotive'|'Computers and Electronics'|'Consumer Goods'|'Education'|'Energy - Oil and Gas'|'Energy - Power and Utilities'|'Financial Services'|'Gaming'|'Government'|'Healthcare'|'Hospitality'|'Life Sciences'|'Manufacturing'|'Marketing and Advertising'|'Media and Entertainment'|'Mining'|'Non-Profit Organization'|'Professional Services'|'Real Estate and Construction'|'Retail'|'Software and Internet'|'Telecommunications'|'Transportation and Logistics'|'Travel'|'Wholesale and Distribution'|'Other'|null,
     *     OtherIndustry?: string|null,
     *     CompanyName: string,
     *     WebsiteUrl?: string|null,
     *     Address?: AddressSummary|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
