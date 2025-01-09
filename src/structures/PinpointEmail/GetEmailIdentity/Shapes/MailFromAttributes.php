<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetEmailIdentity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MailFromDomain
 * @property 'PENDING'|'SUCCESS'|'FAILED'|'TEMPORARY_FAILURE' $MailFromDomainStatus
 * @property 'USE_DEFAULT_VALUE'|'REJECT_MESSAGE' $BehaviorOnMxFailure
 */
class MailFromAttributes extends Shape
{
    /**
     * @param array{
     *     MailFromDomain: string,
     *     MailFromDomainStatus: 'PENDING'|'SUCCESS'|'FAILED'|'TEMPORARY_FAILURE',
     *     BehaviorOnMxFailure: 'USE_DEFAULT_VALUE'|'REJECT_MESSAGE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
