<?php

namespace Sunaoka\Aws\Structures\Route53Domains\GetOperationDetail;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $OperationId
 * @property 'SUBMITTED'|'IN_PROGRESS'|'ERROR'|'SUCCESSFUL'|'FAILED'|null $Status
 * @property string|null $Message
 * @property string|null $DomainName
 * @property 'REGISTER_DOMAIN'|'DELETE_DOMAIN'|'TRANSFER_IN_DOMAIN'|'UPDATE_DOMAIN_CONTACT'|'UPDATE_NAMESERVER'|'CHANGE_PRIVACY_PROTECTION'|'DOMAIN_LOCK'|'ENABLE_AUTORENEW'|'DISABLE_AUTORENEW'|'ADD_DNSSEC'|'REMOVE_DNSSEC'|'EXPIRE_DOMAIN'|'TRANSFER_OUT_DOMAIN'|'CHANGE_DOMAIN_OWNER'|'RENEW_DOMAIN'|'PUSH_DOMAIN'|'INTERNAL_TRANSFER_OUT_DOMAIN'|'INTERNAL_TRANSFER_IN_DOMAIN'|'RELEASE_TO_GANDI'|'TRANSFER_ON_RENEW'|'RESTORE_DOMAIN'|null $Type
 * @property \Aws\Api\DateTimeResult|null $SubmittedDate
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedDate
 * @property 'PENDING_ACCEPTANCE'|'PENDING_CUSTOMER_ACTION'|'PENDING_AUTHORIZATION'|'PENDING_PAYMENT_VERIFICATION'|'PENDING_SUPPORT_CASE'|null $StatusFlag
 */
class GetOperationDetailResponse extends Response
{
}
