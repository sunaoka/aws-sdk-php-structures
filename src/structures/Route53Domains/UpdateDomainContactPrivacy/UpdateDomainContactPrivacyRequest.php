<?php

namespace Sunaoka\Aws\Structures\Route53Domains\UpdateDomainContactPrivacy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property bool $AdminPrivacy
 * @property bool $RegistrantPrivacy
 * @property bool $TechPrivacy
 * @property bool $BillingPrivacy
 */
class UpdateDomainContactPrivacyRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     AdminPrivacy?: bool,
     *     RegistrantPrivacy?: bool,
     *     TechPrivacy?: bool,
     *     BillingPrivacy?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
