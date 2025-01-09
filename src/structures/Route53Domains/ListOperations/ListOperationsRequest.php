<?php

namespace Sunaoka\Aws\Structures\Route53Domains\ListOperations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $SubmittedSince
 * @property string $Marker
 * @property int $MaxItems
 * @property list<'SUBMITTED'|'IN_PROGRESS'|'ERROR'|'SUCCESSFUL'|'FAILED'> $Status
 * @property list<'REGISTER_DOMAIN'|'DELETE_DOMAIN'|'TRANSFER_IN_DOMAIN'|'UPDATE_DOMAIN_CONTACT'|'UPDATE_NAMESERVER'|'CHANGE_PRIVACY_PROTECTION'|'DOMAIN_LOCK'|'ENABLE_AUTORENEW'|'DISABLE_AUTORENEW'|'ADD_DNSSEC'|'REMOVE_DNSSEC'|'EXPIRE_DOMAIN'|'TRANSFER_OUT_DOMAIN'|'CHANGE_DOMAIN_OWNER'|'RENEW_DOMAIN'|'PUSH_DOMAIN'|'INTERNAL_TRANSFER_OUT_DOMAIN'|'INTERNAL_TRANSFER_IN_DOMAIN'|'RELEASE_TO_GANDI'|'TRANSFER_ON_RENEW'|'RESTORE_DOMAIN'> $Type
 * @property 'SubmittedDate' $SortBy
 * @property 'ASC'|'DESC' $SortOrder
 */
class ListOperationsRequest extends Request
{
    /**
     * @param array{
     *     SubmittedSince?: \Aws\Api\DateTimeResult,
     *     Marker?: string,
     *     MaxItems?: int,
     *     Status?: list<'SUBMITTED'|'IN_PROGRESS'|'ERROR'|'SUCCESSFUL'|'FAILED'>,
     *     Type?: list<'REGISTER_DOMAIN'|'DELETE_DOMAIN'|'TRANSFER_IN_DOMAIN'|'UPDATE_DOMAIN_CONTACT'|'UPDATE_NAMESERVER'|'CHANGE_PRIVACY_PROTECTION'|'DOMAIN_LOCK'|'ENABLE_AUTORENEW'|'DISABLE_AUTORENEW'|'ADD_DNSSEC'|'REMOVE_DNSSEC'|'EXPIRE_DOMAIN'|'TRANSFER_OUT_DOMAIN'|'CHANGE_DOMAIN_OWNER'|'RENEW_DOMAIN'|'PUSH_DOMAIN'|'INTERNAL_TRANSFER_OUT_DOMAIN'|'INTERNAL_TRANSFER_IN_DOMAIN'|'RELEASE_TO_GANDI'|'TRANSFER_ON_RENEW'|'RESTORE_DOMAIN'>,
     *     SortBy?: 'SubmittedDate',
     *     SortOrder?: 'ASC'|'DESC'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
