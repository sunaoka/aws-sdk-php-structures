<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\GetQuotaUtilizationReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $QuotaCode
 * @property string|null $ServiceCode
 * @property string|null $QuotaName
 * @property string|null $Namespace
 * @property double|null $Utilization
 * @property double|null $DefaultValue
 * @property double|null $AppliedValue
 * @property string|null $ServiceName
 * @property bool|null $Adjustable
 */
class QuotaUtilizationInfo extends Shape
{
    /**
     * @param array{
     *     QuotaCode?: string|null,
     *     ServiceCode?: string|null,
     *     QuotaName?: string|null,
     *     Namespace?: string|null,
     *     Utilization?: double|null,
     *     DefaultValue?: double|null,
     *     AppliedValue?: double|null,
     *     ServiceName?: string|null,
     *     Adjustable?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
