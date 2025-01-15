<?php

namespace Sunaoka\Aws\Structures\Scheduler\GetScheduleGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreationDate
 * @property \Aws\Api\DateTimeResult|null $LastModificationDate
 * @property string|null $Name
 * @property 'ACTIVE'|'DELETING'|null $State
 */
class GetScheduleGroupResponse extends Response
{
}
