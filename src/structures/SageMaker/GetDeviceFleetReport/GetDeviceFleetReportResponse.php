<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetDeviceFleetReport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DeviceFleetArn
 * @property string $DeviceFleetName
 * @property Shapes\EdgeOutputConfig|null $OutputConfig
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $ReportGenerated
 * @property Shapes\DeviceStats|null $DeviceStats
 * @property list<Shapes\AgentVersion>|null $AgentVersions
 * @property list<Shapes\EdgeModelStat>|null $ModelStats
 */
class GetDeviceFleetReportResponse extends Response
{
}
