<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListOpportunities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AddressSummary|null $Address
 * @property string $CompanyName
 * @property 'Aerospace'|'Agriculture'|'Automotive'|'Computers and Electronics'|'Consumer Goods'|'Education'|'Energy - Oil and Gas'|'Energy - Power and Utilities'|'Financial Services'|'Gaming'|'Government'|'Healthcare'|'Hospitality'|'Life Sciences'|'Manufacturing'|'Marketing and Advertising'|'Media and Entertainment'|'Mining'|'Non-Profit Organization'|'Professional Services'|'Real Estate and Construction'|'Retail'|'Software and Internet'|'Telecommunications'|'Transportation and Logistics'|'Travel'|'Wholesale and Distribution'|'Other'|null $Industry
 * @property string|null $OtherIndustry
 * @property string|null $WebsiteUrl
 */
class AccountSummary extends Shape
{
    /**
     * @param array{
     *     Address?: AddressSummary|null,
     *     CompanyName: string,
     *     Industry?: 'Aerospace'|'Agriculture'|'Automotive'|'Computers and Electronics'|'Consumer Goods'|'Education'|'Energy - Oil and Gas'|'Energy - Power and Utilities'|'Financial Services'|'Gaming'|'Government'|'Healthcare'|'Hospitality'|'Life Sciences'|'Manufacturing'|'Marketing and Advertising'|'Media and Entertainment'|'Mining'|'Non-Profit Organization'|'Professional Services'|'Real Estate and Construction'|'Retail'|'Software and Internet'|'Telecommunications'|'Transportation and Logistics'|'Travel'|'Wholesale and Distribution'|'Other'|null,
     *     OtherIndustry?: string|null,
     *     WebsiteUrl?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
