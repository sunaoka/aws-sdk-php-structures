<?php

namespace Sunaoka\Aws\Structures\Route53Domains\TransferDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property string $IdnLangCode
 * @property int $DurationInYears
 * @property list<Shapes\Nameserver> $Nameservers
 * @property string $AuthCode
 * @property bool $AutoRenew
 * @property Shapes\ContactDetail $AdminContact
 * @property Shapes\ContactDetail $RegistrantContact
 * @property Shapes\ContactDetail $TechContact
 * @property bool $PrivacyProtectAdminContact
 * @property bool $PrivacyProtectRegistrantContact
 * @property bool $PrivacyProtectTechContact
 * @property Shapes\ContactDetail $BillingContact
 * @property bool $PrivacyProtectBillingContact
 */
class TransferDomainRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     IdnLangCode?: string,
     *     DurationInYears: int,
     *     Nameservers?: list<Shapes\Nameserver>,
     *     AuthCode?: string,
     *     AutoRenew?: bool,
     *     AdminContact: Shapes\ContactDetail,
     *     RegistrantContact: Shapes\ContactDetail,
     *     TechContact: Shapes\ContactDetail,
     *     PrivacyProtectAdminContact?: bool,
     *     PrivacyProtectRegistrantContact?: bool,
     *     PrivacyProtectTechContact?: bool,
     *     BillingContact?: Shapes\ContactDetail,
     *     PrivacyProtectBillingContact?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
