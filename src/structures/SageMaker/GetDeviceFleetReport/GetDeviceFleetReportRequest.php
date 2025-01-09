<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetDeviceFleetReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceFleetName
 */
class GetDeviceFleetReportRequest extends Request
{
    /**
     * @param array{DeviceFleetName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
