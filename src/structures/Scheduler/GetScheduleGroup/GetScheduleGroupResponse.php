<?php

namespace Sunaoka\Aws\Structures\Scheduler\GetScheduleGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property \Aws\Api\DateTimeResult $LastModificationDate
 * @property string $Name
 * @property 'ACTIVE'|'DELETING' $State
 */
class GetScheduleGroupResponse extends Response
{
}
