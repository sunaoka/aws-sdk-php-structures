<?php

namespace Sunaoka\Aws\Structures\Connect\BatchPutContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RequestIdentifier
 * @property 'INVALID_ATTRIBUTE_KEY'|'INVALID_CUSTOMER_ENDPOINT'|'INVALID_SYSTEM_ENDPOINT'|'INVALID_QUEUE'|'INVALID_OUTBOUND_STRATEGY'|'MISSING_CAMPAIGN'|'MISSING_CUSTOMER_ENDPOINT'|'MISSING_QUEUE_ID_AND_SYSTEM_ENDPOINT'|'REQUEST_THROTTLED'|'IDEMPOTENCY_EXCEPTION'|'INTERNAL_ERROR'|null $FailureReasonCode
 * @property string|null $FailureReasonMessage
 */
class FailedRequest extends Shape
{
    /**
     * @param array{
     *     RequestIdentifier?: string|null,
     *     FailureReasonCode?: 'INVALID_ATTRIBUTE_KEY'|'INVALID_CUSTOMER_ENDPOINT'|'INVALID_SYSTEM_ENDPOINT'|'INVALID_QUEUE'|'INVALID_OUTBOUND_STRATEGY'|'MISSING_CAMPAIGN'|'MISSING_CUSTOMER_ENDPOINT'|'MISSING_QUEUE_ID_AND_SYSTEM_ENDPOINT'|'REQUEST_THROTTLED'|'IDEMPOTENCY_EXCEPTION'|'INTERNAL_ERROR'|null,
     *     FailureReasonMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
