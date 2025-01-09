<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\GetServiceQuotaIncreaseRequestFromTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServiceCode
 * @property string $ServiceName
 * @property string $QuotaCode
 * @property string $QuotaName
 * @property double $DesiredValue
 * @property string $AwsRegion
 * @property string $Unit
 * @property bool $GlobalQuota
 */
class ServiceQuotaIncreaseRequestInTemplate extends Shape
{
    /**
     * @param array{
     *     ServiceCode?: string,
     *     ServiceName?: string,
     *     QuotaCode?: string,
     *     QuotaName?: string,
     *     DesiredValue?: double,
     *     AwsRegion?: string,
     *     Unit?: string,
     *     GlobalQuota?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
