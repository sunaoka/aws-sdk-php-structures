<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\StartProfileUpdateTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Catalog
 * @property string $Arn
 * @property string $Id
 * @property string $TaskId
 * @property Shapes\TaskDetails $TaskDetails
 * @property \Aws\Api\DateTimeResult $StartedAt
 * @property 'IN_PROGRESS'|'CANCELED'|'SUCCEEDED'|'FAILED' $Status
 * @property \Aws\Api\DateTimeResult|null $EndedAt
 * @property list<Shapes\ErrorDetail>|null $ErrorDetailList
 */
class StartProfileUpdateTaskResponse extends Response
{
}
