<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $InvestigationId
 * @property 'RUNNING'|'COMPLETED'|'FAILED' $Status
 * @property list<Shapes\InvestigationRecord> $Records
 * @property string|null $NextToken
 */
class ListInvestigationRecordsResponse extends Response
{
}
