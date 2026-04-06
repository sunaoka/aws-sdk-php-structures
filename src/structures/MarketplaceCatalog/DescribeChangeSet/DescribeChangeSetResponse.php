<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeChangeSet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ChangeSetId
 * @property string|null $ChangeSetArn
 * @property string|null $ChangeSetName
 * @property 'VALIDATE'|'APPLY'|null $Intent
 * @property string|null $StartTime
 * @property string|null $EndTime
 * @property 'PREPARING'|'APPLYING'|'SUCCEEDED'|'CANCELLED'|'FAILED'|null $Status
 * @property 'CLIENT_ERROR'|'SERVER_FAULT'|null $FailureCode
 * @property string|null $FailureDescription
 * @property list<Shapes\ChangeSummary>|null $ChangeSet
 */
class DescribeChangeSetResponse extends Response
{
}
