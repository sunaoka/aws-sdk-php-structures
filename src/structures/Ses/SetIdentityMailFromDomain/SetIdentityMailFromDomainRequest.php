<?php

namespace Sunaoka\Aws\Structures\Ses\SetIdentityMailFromDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identity
 * @property string|null $MailFromDomain
 * @property 'UseDefaultValue'|'RejectMessage'|null $BehaviorOnMXFailure
 */
class SetIdentityMailFromDomainRequest extends Request
{
    /**
     * @param array{
     *     Identity: string,
     *     MailFromDomain?: string|null,
     *     BehaviorOnMXFailure?: 'UseDefaultValue'|'RejectMessage'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
