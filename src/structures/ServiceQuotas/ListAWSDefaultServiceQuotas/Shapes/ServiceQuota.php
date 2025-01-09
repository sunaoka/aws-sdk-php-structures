<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\ListAWSDefaultServiceQuotas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServiceCode
 * @property string $ServiceName
 * @property string $QuotaArn
 * @property string $QuotaCode
 * @property string $QuotaName
 * @property double $Value
 * @property string $Unit
 * @property bool $Adjustable
 * @property bool $GlobalQuota
 * @property MetricInfo $UsageMetric
 * @property QuotaPeriod $Period
 * @property ErrorReason $ErrorReason
 * @property 'ACCOUNT'|'RESOURCE'|'ALL' $QuotaAppliedAtLevel
 * @property QuotaContextInfo $QuotaContext
 */
class ServiceQuota extends Shape
{
    /**
     * @param array{
     *     ServiceCode?: string,
     *     ServiceName?: string,
     *     QuotaArn?: string,
     *     QuotaCode?: string,
     *     QuotaName?: string,
     *     Value?: double,
     *     Unit?: string,
     *     Adjustable?: bool,
     *     GlobalQuota?: bool,
     *     UsageMetric?: MetricInfo,
     *     Period?: QuotaPeriod,
     *     ErrorReason?: ErrorReason,
     *     QuotaAppliedAtLevel?: 'ACCOUNT'|'RESOURCE'|'ALL',
     *     QuotaContext?: QuotaContextInfo
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
