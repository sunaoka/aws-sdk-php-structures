<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetDeviceFleetReport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DeviceFleetArn
 * @property string $DeviceFleetName
 * @property Shapes\EdgeOutputConfig $OutputConfig
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $ReportGenerated
 * @property Shapes\DeviceStats $DeviceStats
 * @property list<Shapes\AgentVersion> $AgentVersions
 * @property list<Shapes\EdgeModelStat> $ModelStats
 */
class GetDeviceFleetReportResponse extends Response
{
}
