<?php

namespace Sunaoka\Aws\Structures\Ses\GetIdentityMailFromDomainAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MailFromDomain
 * @property 'Pending'|'Success'|'Failed'|'TemporaryFailure' $MailFromDomainStatus
 * @property 'UseDefaultValue'|'RejectMessage' $BehaviorOnMXFailure
 */
class IdentityMailFromDomainAttributes extends Shape
{
    /**
     * @param array{
     *     MailFromDomain: string,
     *     MailFromDomainStatus: 'Pending'|'Success'|'Failed'|'TemporaryFailure',
     *     BehaviorOnMXFailure: 'UseDefaultValue'|'RejectMessage'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
