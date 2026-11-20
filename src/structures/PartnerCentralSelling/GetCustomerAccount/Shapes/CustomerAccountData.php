<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetCustomerAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CompanyName
 * @property string|null $WebsiteUrl
 * @property string|null $Duns
 * @property Address|null $Address
 * @property string|null $Industry
 * @property string|null $OtherIndustry
 * @property string|null $Domain
 * @property string|null $ParentCompanyName
 */
class CustomerAccountData extends Shape
{
    /**
     * @param array{
     *     CompanyName: string,
     *     WebsiteUrl?: string|null,
     *     Duns?: string|null,
     *     Address?: Address|null,
     *     Industry?: string|null,
     *     OtherIndustry?: string|null,
     *     Domain?: string|null,
     *     ParentCompanyName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
