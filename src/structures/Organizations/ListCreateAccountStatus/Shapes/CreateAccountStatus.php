<?php

namespace Sunaoka\Aws\Structures\Organizations\ListCreateAccountStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $AccountName
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|null $State
 * @property \Aws\Api\DateTimeResult|null $RequestedTimestamp
 * @property \Aws\Api\DateTimeResult|null $CompletedTimestamp
 * @property string|null $AccountId
 * @property string|null $GovCloudAccountId
 * @property 'ACCOUNT_LIMIT_EXCEEDED'|'EMAIL_ALREADY_EXISTS'|'INVALID_ADDRESS'|'INVALID_EMAIL'|'CONCURRENT_ACCOUNT_MODIFICATION'|'INTERNAL_FAILURE'|'GOVCLOUD_ACCOUNT_ALREADY_EXISTS'|'MISSING_BUSINESS_VALIDATION'|'FAILED_BUSINESS_VALIDATION'|'PENDING_BUSINESS_VALIDATION'|'INVALID_IDENTITY_FOR_BUSINESS_VALIDATION'|'UNKNOWN_BUSINESS_VALIDATION'|'MISSING_PAYMENT_INSTRUMENT'|'INVALID_PAYMENT_INSTRUMENT'|'UPDATE_EXISTING_RESOURCE_POLICY_WITH_TAGS_NOT_SUPPORTED'|null $FailureReason
 */
class CreateAccountStatus extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     AccountName?: string|null,
     *     State?: 'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|null,
     *     RequestedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     CompletedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     AccountId?: string|null,
     *     GovCloudAccountId?: string|null,
     *     FailureReason?: 'ACCOUNT_LIMIT_EXCEEDED'|'EMAIL_ALREADY_EXISTS'|'INVALID_ADDRESS'|'INVALID_EMAIL'|'CONCURRENT_ACCOUNT_MODIFICATION'|'INTERNAL_FAILURE'|'GOVCLOUD_ACCOUNT_ALREADY_EXISTS'|'MISSING_BUSINESS_VALIDATION'|'FAILED_BUSINESS_VALIDATION'|'PENDING_BUSINESS_VALIDATION'|'INVALID_IDENTITY_FOR_BUSINESS_VALIDATION'|'UNKNOWN_BUSINESS_VALIDATION'|'MISSING_PAYMENT_INSTRUMENT'|'INVALID_PAYMENT_INSTRUMENT'|'UPDATE_EXISTING_RESOURCE_POLICY_WITH_TAGS_NOT_SUPPORTED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
