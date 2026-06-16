<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetProspectingFromEngagementTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TaskId
 * @property string $TaskArn
 * @property string $TaskName
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property list<Shapes\EngagementProspectingResult> $Engagements
 */
class GetProspectingFromEngagementTaskResponse extends Response
{
}
