<?php

namespace Sunaoka\Aws\Structures\Route53Domains\UpdateDomainContactPrivacy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DomainName
 * @property bool|null $AdminPrivacy
 * @property bool|null $RegistrantPrivacy
 * @property bool|null $TechPrivacy
 * @property bool|null $BillingPrivacy
 */
class UpdateDomainContactPrivacyRequest extends Request
{
    /**
     * @param array{
     *     DomainName: string,
     *     AdminPrivacy?: bool|null,
     *     RegistrantPrivacy?: bool|null,
     *     TechPrivacy?: bool|null,
     *     BillingPrivacy?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
