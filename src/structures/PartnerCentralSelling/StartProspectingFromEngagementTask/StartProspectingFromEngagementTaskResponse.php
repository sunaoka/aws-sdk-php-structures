<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\StartProspectingFromEngagementTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<string> $Identifiers
 * @property string $TaskName
 * @property string|null $Message
 * @property string|null $ReasonCode
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property string|null $TaskId
 * @property string|null $TaskArn
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED' $TaskStatus
 */
class StartProspectingFromEngagementTaskResponse extends Response
{
}
