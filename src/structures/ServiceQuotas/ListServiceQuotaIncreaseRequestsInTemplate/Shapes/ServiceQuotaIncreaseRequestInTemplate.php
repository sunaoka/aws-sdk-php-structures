<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\ListServiceQuotaIncreaseRequestsInTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServiceCode
 * @property string|null $ServiceName
 * @property string|null $QuotaCode
 * @property string|null $QuotaName
 * @property double|null $DesiredValue
 * @property string|null $AwsRegion
 * @property string|null $Unit
 * @property bool|null $GlobalQuota
 */
class ServiceQuotaIncreaseRequestInTemplate extends Shape
{
    /**
     * @param array{
     *     ServiceCode?: string|null,
     *     ServiceName?: string|null,
     *     QuotaCode?: string|null,
     *     QuotaName?: string|null,
     *     DesiredValue?: double|null,
     *     AwsRegion?: string|null,
     *     Unit?: string|null,
     *     GlobalQuota?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
