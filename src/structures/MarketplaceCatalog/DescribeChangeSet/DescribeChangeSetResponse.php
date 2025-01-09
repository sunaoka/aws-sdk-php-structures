<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeChangeSet;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ChangeSetId
 * @property string $ChangeSetArn
 * @property string $ChangeSetName
 * @property 'VALIDATE'|'APPLY' $Intent
 * @property string $StartTime
 * @property string $EndTime
 * @property 'PREPARING'|'APPLYING'|'SUCCEEDED'|'CANCELLED'|'FAILED' $Status
 * @property 'CLIENT_ERROR'|'SERVER_FAULT' $FailureCode
 * @property string $FailureDescription
 * @property list<Shapes\ChangeSummary> $ChangeSet
 */
class DescribeChangeSetResponse extends Response
{
}
