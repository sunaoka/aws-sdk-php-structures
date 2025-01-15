<?php

namespace Sunaoka\Aws\Structures\SesV2\SendBulkEmail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUCCESS'|'MESSAGE_REJECTED'|'MAIL_FROM_DOMAIN_NOT_VERIFIED'|'CONFIGURATION_SET_NOT_FOUND'|'TEMPLATE_NOT_FOUND'|'ACCOUNT_SUSPENDED'|'ACCOUNT_THROTTLED'|'ACCOUNT_DAILY_QUOTA_EXCEEDED'|'INVALID_SENDING_POOL_NAME'|'ACCOUNT_SENDING_PAUSED'|'CONFIGURATION_SET_SENDING_PAUSED'|'INVALID_PARAMETER'|'TRANSIENT_FAILURE'|'FAILED'|null $Status
 * @property string|null $Error
 * @property string|null $MessageId
 */
class BulkEmailEntryResult extends Shape
{
    /**
     * @param array{
     *     Status?: 'SUCCESS'|'MESSAGE_REJECTED'|'MAIL_FROM_DOMAIN_NOT_VERIFIED'|'CONFIGURATION_SET_NOT_FOUND'|'TEMPLATE_NOT_FOUND'|'ACCOUNT_SUSPENDED'|'ACCOUNT_THROTTLED'|'ACCOUNT_DAILY_QUOTA_EXCEEDED'|'INVALID_SENDING_POOL_NAME'|'ACCOUNT_SENDING_PAUSED'|'CONFIGURATION_SET_SENDING_PAUSED'|'INVALID_PARAMETER'|'TRANSIENT_FAILURE'|'FAILED'|null,
     *     Error?: string|null,
     *     MessageId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
