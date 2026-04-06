<?php

namespace Sunaoka\Aws\Structures\Route53Domains\ListOperations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult|null $SubmittedSince
 * @property string|null $Marker
 * @property int<min, 100>|null $MaxItems
 * @property list<'SUBMITTED'|'IN_PROGRESS'|'ERROR'|'SUCCESSFUL'|'FAILED'>|null $Status
 * @property list<'REGISTER_DOMAIN'|'DELETE_DOMAIN'|'TRANSFER_IN_DOMAIN'|'UPDATE_DOMAIN_CONTACT'|'UPDATE_NAMESERVER'|'CHANGE_PRIVACY_PROTECTION'|'DOMAIN_LOCK'|'ENABLE_AUTORENEW'|'DISABLE_AUTORENEW'|'ADD_DNSSEC'|'REMOVE_DNSSEC'|'EXPIRE_DOMAIN'|'TRANSFER_OUT_DOMAIN'|'CHANGE_DOMAIN_OWNER'|'RENEW_DOMAIN'|'PUSH_DOMAIN'|'INTERNAL_TRANSFER_OUT_DOMAIN'|'INTERNAL_TRANSFER_IN_DOMAIN'|'RELEASE_TO_GANDI'|'TRANSFER_ON_RENEW'|'RESTORE_DOMAIN'>|null $Type
 * @property 'SubmittedDate'|null $SortBy
 * @property 'ASC'|'DESC'|null $SortOrder
 */
class ListOperationsRequest extends Request
{
    /**
     * @param array{
     *     SubmittedSince?: \Aws\Api\DateTimeResult|null,
     *     Marker?: string|null,
     *     MaxItems?: int<min, 100>|null,
     *     Status?: list<'SUBMITTED'|'IN_PROGRESS'|'ERROR'|'SUCCESSFUL'|'FAILED'>|null,
     *     Type?: list<'REGISTER_DOMAIN'|'DELETE_DOMAIN'|'TRANSFER_IN_DOMAIN'|'UPDATE_DOMAIN_CONTACT'|'UPDATE_NAMESERVER'|'CHANGE_PRIVACY_PROTECTION'|'DOMAIN_LOCK'|'ENABLE_AUTORENEW'|'DISABLE_AUTORENEW'|'ADD_DNSSEC'|'REMOVE_DNSSEC'|'EXPIRE_DOMAIN'|'TRANSFER_OUT_DOMAIN'|'CHANGE_DOMAIN_OWNER'|'RENEW_DOMAIN'|'PUSH_DOMAIN'|'INTERNAL_TRANSFER_OUT_DOMAIN'|'INTERNAL_TRANSFER_IN_DOMAIN'|'RELEASE_TO_GANDI'|'TRANSFER_ON_RENEW'|'RESTORE_DOMAIN'>|null,
     *     SortBy?: 'SubmittedDate'|null,
     *     SortOrder?: 'ASC'|'DESC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
