<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ActionType
 * @property NetworkConnectionAction $NetworkConnectionAction
 * @property AwsApiCallAction $AwsApiCallAction
 * @property DnsRequestAction $DnsRequestAction
 * @property PortProbeAction $PortProbeAction
 */
class Action extends Shape
{
    /**
     * @param array{
     *     ActionType?: string,
     *     NetworkConnectionAction?: NetworkConnectionAction,
     *     AwsApiCallAction?: AwsApiCallAction,
     *     DnsRequestAction?: DnsRequestAction,
     *     PortProbeAction?: PortProbeAction
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
