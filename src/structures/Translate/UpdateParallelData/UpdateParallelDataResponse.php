<?php

namespace Sunaoka\Aws\Structures\Translate\UpdateParallelData;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property 'CREATING'|'UPDATING'|'ACTIVE'|'DELETING'|'FAILED' $Status
 * @property 'CREATING'|'UPDATING'|'ACTIVE'|'DELETING'|'FAILED' $LatestUpdateAttemptStatus
 * @property \Aws\Api\DateTimeResult $LatestUpdateAttemptAt
 */
class UpdateParallelDataResponse extends Response
{
}
