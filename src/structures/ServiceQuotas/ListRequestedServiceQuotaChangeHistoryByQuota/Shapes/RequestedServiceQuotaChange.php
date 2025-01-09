<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\ListRequestedServiceQuotaChangeHistoryByQuota\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $CaseId
 * @property string $ServiceCode
 * @property string $ServiceName
 * @property string $QuotaCode
 * @property string $QuotaName
 * @property double $DesiredValue
 * @property 'PENDING'|'CASE_OPENED'|'APPROVED'|'DENIED'|'CASE_CLOSED'|'NOT_APPROVED'|'INVALID_REQUEST' $Status
 * @property \Aws\Api\DateTimeResult $Created
 * @property \Aws\Api\DateTimeResult $LastUpdated
 * @property string $Requester
 * @property string $QuotaArn
 * @property bool $GlobalQuota
 * @property string $Unit
 * @property 'ACCOUNT'|'RESOURCE'|'ALL' $QuotaRequestedAtLevel
 * @property QuotaContextInfo $QuotaContext
 */
class RequestedServiceQuotaChange extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     CaseId?: string,
     *     ServiceCode?: string,
     *     ServiceName?: string,
     *     QuotaCode?: string,
     *     QuotaName?: string,
     *     DesiredValue?: double,
     *     Status?: 'PENDING'|'CASE_OPENED'|'APPROVED'|'DENIED'|'CASE_CLOSED'|'NOT_APPROVED'|'INVALID_REQUEST',
     *     Created?: \Aws\Api\DateTimeResult,
     *     LastUpdated?: \Aws\Api\DateTimeResult,
     *     Requester?: string,
     *     QuotaArn?: string,
     *     GlobalQuota?: bool,
     *     Unit?: string,
     *     QuotaRequestedAtLevel?: 'ACCOUNT'|'RESOURCE'|'ALL',
     *     QuotaContext?: QuotaContextInfo
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
