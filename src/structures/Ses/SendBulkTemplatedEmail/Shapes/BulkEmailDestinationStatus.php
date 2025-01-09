<?php

namespace Sunaoka\Aws\Structures\Ses\SendBulkTemplatedEmail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Success'|'MessageRejected'|'MailFromDomainNotVerified'|'ConfigurationSetDoesNotExist'|'TemplateDoesNotExist'|'AccountSuspended'|'AccountThrottled'|'AccountDailyQuotaExceeded'|'InvalidSendingPoolName'|'AccountSendingPaused'|'ConfigurationSetSendingPaused'|'InvalidParameterValue'|'TransientFailure'|'Failed' $Status
 * @property string $Error
 * @property string $MessageId
 */
class BulkEmailDestinationStatus extends Shape
{
    /**
     * @param array{
     *     Status?: 'Success'|'MessageRejected'|'MailFromDomainNotVerified'|'ConfigurationSetDoesNotExist'|'TemplateDoesNotExist'|'AccountSuspended'|'AccountThrottled'|'AccountDailyQuotaExceeded'|'InvalidSendingPoolName'|'AccountSendingPaused'|'ConfigurationSetSendingPaused'|'InvalidParameterValue'|'TransientFailure'|'Failed',
     *     Error?: string,
     *     MessageId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
