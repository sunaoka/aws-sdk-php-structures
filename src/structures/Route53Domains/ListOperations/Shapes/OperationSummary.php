<?php

namespace Sunaoka\Aws\Structures\Route53Domains\ListOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OperationId
 * @property 'SUBMITTED'|'IN_PROGRESS'|'ERROR'|'SUCCESSFUL'|'FAILED' $Status
 * @property 'REGISTER_DOMAIN'|'DELETE_DOMAIN'|'TRANSFER_IN_DOMAIN'|'UPDATE_DOMAIN_CONTACT'|'UPDATE_NAMESERVER'|'CHANGE_PRIVACY_PROTECTION'|'DOMAIN_LOCK'|'ENABLE_AUTORENEW'|'DISABLE_AUTORENEW'|'ADD_DNSSEC'|'REMOVE_DNSSEC'|'EXPIRE_DOMAIN'|'TRANSFER_OUT_DOMAIN'|'CHANGE_DOMAIN_OWNER'|'RENEW_DOMAIN'|'PUSH_DOMAIN'|'INTERNAL_TRANSFER_OUT_DOMAIN'|'INTERNAL_TRANSFER_IN_DOMAIN'|'RELEASE_TO_GANDI'|'TRANSFER_ON_RENEW'|'RESTORE_DOMAIN' $Type
 * @property \Aws\Api\DateTimeResult $SubmittedDate
 * @property string $DomainName
 * @property string $Message
 * @property 'PENDING_ACCEPTANCE'|'PENDING_CUSTOMER_ACTION'|'PENDING_AUTHORIZATION'|'PENDING_PAYMENT_VERIFICATION'|'PENDING_SUPPORT_CASE' $StatusFlag
 * @property \Aws\Api\DateTimeResult $LastUpdatedDate
 */
class OperationSummary extends Shape
{
    /**
     * @param array{
     *     OperationId?: string,
     *     Status?: 'SUBMITTED'|'IN_PROGRESS'|'ERROR'|'SUCCESSFUL'|'FAILED',
     *     Type?: 'REGISTER_DOMAIN'|'DELETE_DOMAIN'|'TRANSFER_IN_DOMAIN'|'UPDATE_DOMAIN_CONTACT'|'UPDATE_NAMESERVER'|'CHANGE_PRIVACY_PROTECTION'|'DOMAIN_LOCK'|'ENABLE_AUTORENEW'|'DISABLE_AUTORENEW'|'ADD_DNSSEC'|'REMOVE_DNSSEC'|'EXPIRE_DOMAIN'|'TRANSFER_OUT_DOMAIN'|'CHANGE_DOMAIN_OWNER'|'RENEW_DOMAIN'|'PUSH_DOMAIN'|'INTERNAL_TRANSFER_OUT_DOMAIN'|'INTERNAL_TRANSFER_IN_DOMAIN'|'RELEASE_TO_GANDI'|'TRANSFER_ON_RENEW'|'RESTORE_DOMAIN',
     *     SubmittedDate?: \Aws\Api\DateTimeResult,
     *     DomainName?: string,
     *     Message?: string,
     *     StatusFlag?: 'PENDING_ACCEPTANCE'|'PENDING_CUSTOMER_ACTION'|'PENDING_AUTHORIZATION'|'PENDING_PAYMENT_VERIFICATION'|'PENDING_SUPPORT_CASE',
     *     LastUpdatedDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
