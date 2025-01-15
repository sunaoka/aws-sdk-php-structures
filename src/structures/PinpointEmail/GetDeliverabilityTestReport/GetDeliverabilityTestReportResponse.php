<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetDeliverabilityTestReport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\DeliverabilityTestReport $DeliverabilityTestReport
 * @property Shapes\PlacementStatistics $OverallPlacement
 * @property list<Shapes\IspPlacement> $IspPlacements
 * @property string|null $Message
 * @property list<Shapes\Tag>|null $Tags
 */
class GetDeliverabilityTestReportResponse extends Response
{
}
