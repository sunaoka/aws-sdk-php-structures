<?php

namespace Sunaoka\Aws\Structures\PartnerCentralMarketing\UpdateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'FINANCIAL_SERVICES'|'HEALTHCARE'|'MANUFACTURING'|'RETAIL'|'MEDIA_ENTERTAINMENT'|'ENERGY'|'EDUCATION'|'GOVERNMENT'|'TELECOMMUNICATIONS'|'AUTOMOTIVE'|'INSURANCE'|'OTHER'>|null $Industries
 * @property list<'STARTUP'|'SMALL_BUSINESS'|'MID_MARKET'|'ENTERPRISE'|'GLOBAL_ENTERPRISE'>|null $CompanySizes
 * @property list<string>|null $Countries
 */
class TargetAudience extends Shape
{
    /**
     * @param array{
     *     Industries?: list<'FINANCIAL_SERVICES'|'HEALTHCARE'|'MANUFACTURING'|'RETAIL'|'MEDIA_ENTERTAINMENT'|'ENERGY'|'EDUCATION'|'GOVERNMENT'|'TELECOMMUNICATIONS'|'AUTOMOTIVE'|'INSURANCE'|'OTHER'>|null,
     *     CompanySizes?: list<'STARTUP'|'SMALL_BUSINESS'|'MID_MARKET'|'ENTERPRISE'|'GLOBAL_ENTERPRISE'>|null,
     *     Countries?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
