<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\ListRequestedServiceQuotaChangeHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $CaseId
 * @property string|null $ServiceCode
 * @property string|null $ServiceName
 * @property string|null $QuotaCode
 * @property string|null $QuotaName
 * @property double|null $DesiredValue
 * @property 'PENDING'|'CASE_OPENED'|'APPROVED'|'DENIED'|'CASE_CLOSED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $Created
 * @property \Aws\Api\DateTimeResult|null $LastUpdated
 * @property string|null $Requester
 * @property string|null $QuotaArn
 * @property bool|null $GlobalQuota
 * @property string|null $Unit
 */
class RequestedServiceQuotaChange extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     CaseId?: string|null,
     *     ServiceCode?: string|null,
     *     ServiceName?: string|null,
     *     QuotaCode?: string|null,
     *     QuotaName?: string|null,
     *     DesiredValue?: double|null,
     *     Status?: 'PENDING'|'CASE_OPENED'|'APPROVED'|'DENIED'|'CASE_CLOSED'|null,
     *     Created?: \Aws\Api\DateTimeResult|null,
     *     LastUpdated?: \Aws\Api\DateTimeResult|null,
     *     Requester?: string|null,
     *     QuotaArn?: string|null,
     *     GlobalQuota?: bool|null,
     *     Unit?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
