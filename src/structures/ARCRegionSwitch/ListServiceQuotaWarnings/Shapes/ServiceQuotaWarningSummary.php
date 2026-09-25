<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\ListServiceQuotaWarnings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $quotaRegion
 * @property string|null $serviceCode
 * @property string|null $quotaCode
 * @property string|null $quotaName
 * @property 'pending'|'denied'|'insufficientPermissions'|'maxRegionSwitchRequestsExceeded'|'maxAccountRequestsExceeded' $status
 * @property string $planArn
 * @property string|null $requestId
 * @property string|null $caseId
 * @property string|null $warningMessage
 * @property \Aws\Api\DateTimeResult|null $lastCheckedAt
 * @property \Aws\Api\DateTimeResult|null $warningCreatedAt
 */
class ServiceQuotaWarningSummary extends Shape
{
    /**
     * @param array{
     *     accountId: string,
     *     quotaRegion: string,
     *     serviceCode?: string|null,
     *     quotaCode?: string|null,
     *     quotaName?: string|null,
     *     status: 'pending'|'denied'|'insufficientPermissions'|'maxRegionSwitchRequestsExceeded'|'maxAccountRequestsExceeded',
     *     planArn: string,
     *     requestId?: string|null,
     *     caseId?: string|null,
     *     warningMessage?: string|null,
     *     lastCheckedAt?: \Aws\Api\DateTimeResult|null,
     *     warningCreatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
