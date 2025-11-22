<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListAuditFindings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property list<Shapes\AuditFinding> $AuditFindings
 * @property string|null $NextToken
 */
class ListAuditFindingsResponse extends Response
{
}
