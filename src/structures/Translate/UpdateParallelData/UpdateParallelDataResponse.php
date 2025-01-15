<?php

namespace Sunaoka\Aws\Structures\Translate\UpdateParallelData;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Name
 * @property 'CREATING'|'UPDATING'|'ACTIVE'|'DELETING'|'FAILED'|null $Status
 * @property 'CREATING'|'UPDATING'|'ACTIVE'|'DELETING'|'FAILED'|null $LatestUpdateAttemptStatus
 * @property \Aws\Api\DateTimeResult|null $LatestUpdateAttemptAt
 */
class UpdateParallelDataResponse extends Response
{
}
