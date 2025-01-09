<?php

namespace Sunaoka\Aws\Structures\Route53Domains\UpdateDomainContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property Shapes\ContactDetail $AdminContact
 * @property Shapes\ContactDetail $RegistrantContact
 * @property Shapes\ContactDetail $TechContact
 * @property Shapes\Consent $Consent
 * @property Shapes\ContactDetail $BillingContact
 */
class UpdateDomainContactRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     AdminContact?: Shapes\ContactDetail,
     *     RegistrantContact?: Shapes\ContactDetail,
     *     TechContact?: Shapes\ContactDetail,
     *     Consent?: Shapes\Consent,
     *     BillingContact?: Shapes\ContactDetail
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
