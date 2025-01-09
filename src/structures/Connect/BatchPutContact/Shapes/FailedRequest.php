<?php

namespace Sunaoka\Aws\Structures\Connect\BatchPutContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RequestIdentifier
 * @property 'INVALID_ATTRIBUTE_KEY'|'INVALID_CUSTOMER_ENDPOINT'|'INVALID_SYSTEM_ENDPOINT'|'INVALID_QUEUE'|'MISSING_CAMPAIGN'|'MISSING_CUSTOMER_ENDPOINT'|'MISSING_QUEUE_ID_AND_SYSTEM_ENDPOINT'|'REQUEST_THROTTLED'|'IDEMPOTENCY_EXCEPTION'|'INTERNAL_ERROR' $FailureReasonCode
 * @property string $FailureReasonMessage
 */
class FailedRequest extends Shape
{
    /**
     * @param array{
     *     RequestIdentifier?: string,
     *     FailureReasonCode?: 'INVALID_ATTRIBUTE_KEY'|'INVALID_CUSTOMER_ENDPOINT'|'INVALID_SYSTEM_ENDPOINT'|'INVALID_QUEUE'|'MISSING_CAMPAIGN'|'MISSING_CUSTOMER_ENDPOINT'|'MISSING_QUEUE_ID_AND_SYSTEM_ENDPOINT'|'REQUEST_THROTTLED'|'IDEMPOTENCY_EXCEPTION'|'INTERNAL_ERROR',
     *     FailureReasonMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
