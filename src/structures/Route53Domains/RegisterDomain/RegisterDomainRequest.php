<?php

namespace Sunaoka\Aws\Structures\Route53Domains\RegisterDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string|null $IdnLangCode
 * @property int<1, 10> $DurationInYears
 * @property bool|null $AutoRenew
 * @property Shapes\ContactDetail $AdminContact
 * @property Shapes\ContactDetail $RegistrantContact
 * @property Shapes\ContactDetail $TechContact
 * @property bool|null $PrivacyProtectAdminContact
 * @property bool|null $PrivacyProtectRegistrantContact
 * @property bool|null $PrivacyProtectTechContact
 * @property Shapes\ContactDetail|null $BillingContact
 * @property bool|null $PrivacyProtectBillingContact
 */
class RegisterDomainRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     IdnLangCode?: string|null,
     *     DurationInYears: int<1, 10>,
     *     AutoRenew?: bool|null,
     *     AdminContact: Shapes\ContactDetail,
     *     RegistrantContact: Shapes\ContactDetail,
     *     TechContact: Shapes\ContactDetail,
     *     PrivacyProtectAdminContact?: bool|null,
     *     PrivacyProtectRegistrantContact?: bool|null,
     *     PrivacyProtectTechContact?: bool|null,
     *     BillingContact?: Shapes\ContactDetail|null,
     *     PrivacyProtectBillingContact?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
