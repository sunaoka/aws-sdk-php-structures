<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\ListServiceQuotas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServiceCode
 * @property string|null $ServiceName
 * @property string|null $QuotaArn
 * @property string|null $QuotaCode
 * @property string|null $QuotaName
 * @property double|null $Value
 * @property string|null $Unit
 * @property bool|null $Adjustable
 * @property bool|null $GlobalQuota
 * @property MetricInfo|null $UsageMetric
 * @property QuotaPeriod|null $Period
 * @property ErrorReason|null $ErrorReason
 * @property 'ACCOUNT'|'RESOURCE'|'ALL'|null $QuotaAppliedAtLevel
 * @property QuotaContextInfo|null $QuotaContext
 */
class ServiceQuota extends Shape
{
    /**
     * @param array{
     *     ServiceCode?: string|null,
     *     ServiceName?: string|null,
     *     QuotaArn?: string|null,
     *     QuotaCode?: string|null,
     *     QuotaName?: string|null,
     *     Value?: double|null,
     *     Unit?: string|null,
     *     Adjustable?: bool|null,
     *     GlobalQuota?: bool|null,
     *     UsageMetric?: MetricInfo|null,
     *     Period?: QuotaPeriod|null,
     *     ErrorReason?: ErrorReason|null,
     *     QuotaAppliedAtLevel?: 'ACCOUNT'|'RESOURCE'|'ALL'|null,
     *     QuotaContext?: QuotaContextInfo|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
