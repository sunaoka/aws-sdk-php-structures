<?php

namespace Sunaoka\Aws\Structures\Route53Domains\UpdateDomainContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property Shapes\ContactDetail|null $AdminContact
 * @property Shapes\ContactDetail|null $RegistrantContact
 * @property Shapes\ContactDetail|null $TechContact
 * @property Shapes\Consent|null $Consent
 * @property Shapes\ContactDetail|null $BillingContact
 */
class UpdateDomainContactRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     AdminContact?: Shapes\ContactDetail|null,
     *     RegistrantContact?: Shapes\ContactDetail|null,
     *     TechContact?: Shapes\ContactDetail|null,
     *     Consent?: Shapes\Consent|null,
     *     BillingContact?: Shapes\ContactDetail|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
