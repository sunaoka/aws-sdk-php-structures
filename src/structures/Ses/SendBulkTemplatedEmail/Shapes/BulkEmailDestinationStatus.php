<?php

namespace Sunaoka\Aws\Structures\Ses\SendBulkTemplatedEmail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Success'|'MessageRejected'|'MailFromDomainNotVerified'|'ConfigurationSetDoesNotExist'|'TemplateDoesNotExist'|'AccountSuspended'|'AccountThrottled'|'AccountDailyQuotaExceeded'|'InvalidSendingPoolName'|'AccountSendingPaused'|'ConfigurationSetSendingPaused'|'InvalidParameterValue'|'TransientFailure'|'Failed'|null $Status
 * @property string|null $Error
 * @property string|null $MessageId
 */
class BulkEmailDestinationStatus extends Shape
{
    /**
     * @param array{
     *     Status?: 'Success'|'MessageRejected'|'MailFromDomainNotVerified'|'ConfigurationSetDoesNotExist'|'TemplateDoesNotExist'|'AccountSuspended'|'AccountThrottled'|'AccountDailyQuotaExceeded'|'InvalidSendingPoolName'|'AccountSendingPaused'|'ConfigurationSetSendingPaused'|'InvalidParameterValue'|'TransientFailure'|'Failed'|null,
     *     Error?: string|null,
     *     MessageId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
