<?php

namespace Sunaoka\Aws\Structures\Ses\SetIdentityMailFromDomain;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identity
 * @property string $MailFromDomain
 * @property 'UseDefaultValue'|'RejectMessage' $BehaviorOnMXFailure
 */
class SetIdentityMailFromDomainRequest extends Request
{
    /**
     * @param array{
     *     Identity: string,
     *     MailFromDomain?: string,
     *     BehaviorOnMXFailure?: 'UseDefaultValue'|'RejectMessage'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
