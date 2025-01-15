<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ActionType
 * @property NetworkConnectionAction|null $NetworkConnectionAction
 * @property AwsApiCallAction|null $AwsApiCallAction
 * @property DnsRequestAction|null $DnsRequestAction
 * @property PortProbeAction|null $PortProbeAction
 */
class Action extends Shape
{
    /**
     * @param array{
     *     ActionType?: string|null,
     *     NetworkConnectionAction?: NetworkConnectionAction|null,
     *     AwsApiCallAction?: AwsApiCallAction|null,
     *     DnsRequestAction?: DnsRequestAction|null,
     *     PortProbeAction?: PortProbeAction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
