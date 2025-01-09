<?php

namespace Sunaoka\Aws\Structures\Organizations\CreateGovCloudAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $AccountName
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $State
 * @property \Aws\Api\DateTimeResult $RequestedTimestamp
 * @property \Aws\Api\DateTimeResult $CompletedTimestamp
 * @property string $AccountId
 * @property string $GovCloudAccountId
 * @property 'ACCOUNT_LIMIT_EXCEEDED'|'EMAIL_ALREADY_EXISTS'|'INVALID_ADDRESS'|'INVALID_EMAIL'|'CONCURRENT_ACCOUNT_MODIFICATION'|'INTERNAL_FAILURE'|'GOVCLOUD_ACCOUNT_ALREADY_EXISTS'|'MISSING_BUSINESS_VALIDATION'|'FAILED_BUSINESS_VALIDATION'|'PENDING_BUSINESS_VALIDATION'|'INVALID_IDENTITY_FOR_BUSINESS_VALIDATION'|'UNKNOWN_BUSINESS_VALIDATION'|'MISSING_PAYMENT_INSTRUMENT'|'INVALID_PAYMENT_INSTRUMENT'|'UPDATE_EXISTING_RESOURCE_POLICY_WITH_TAGS_NOT_SUPPORTED' $FailureReason
 */
class CreateAccountStatus extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     AccountName?: string,
     *     State?: 'IN_PROGRESS'|'SUCCEEDED'|'FAILED',
     *     RequestedTimestamp?: \Aws\Api\DateTimeResult,
     *     CompletedTimestamp?: \Aws\Api\DateTimeResult,
     *     AccountId?: string,
     *     GovCloudAccountId?: string,
     *     FailureReason?: 'ACCOUNT_LIMIT_EXCEEDED'|'EMAIL_ALREADY_EXISTS'|'INVALID_ADDRESS'|'INVALID_EMAIL'|'CONCURRENT_ACCOUNT_MODIFICATION'|'INTERNAL_FAILURE'|'GOVCLOUD_ACCOUNT_ALREADY_EXISTS'|'MISSING_BUSINESS_VALIDATION'|'FAILED_BUSINESS_VALIDATION'|'PENDING_BUSINESS_VALIDATION'|'INVALID_IDENTITY_FOR_BUSINESS_VALIDATION'|'UNKNOWN_BUSINESS_VALIDATION'|'MISSING_PAYMENT_INSTRUMENT'|'INVALID_PAYMENT_INSTRUMENT'|'UPDATE_EXISTING_RESOURCE_POLICY_WITH_TAGS_NOT_SUPPORTED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
