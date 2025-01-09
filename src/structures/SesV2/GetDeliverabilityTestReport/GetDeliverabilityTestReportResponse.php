<?php

namespace Sunaoka\Aws\Structures\SesV2\GetDeliverabilityTestReport;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\DeliverabilityTestReport $DeliverabilityTestReport
 * @property Shapes\PlacementStatistics $OverallPlacement
 * @property list<Shapes\IspPlacement> $IspPlacements
 * @property string $Message
 * @property list<Shapes\Tag> $Tags
 */
class GetDeliverabilityTestReportResponse extends Response
{
}
