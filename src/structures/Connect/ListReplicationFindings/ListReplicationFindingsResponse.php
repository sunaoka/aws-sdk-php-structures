<?php

namespace Sunaoka\Aws\Structures\Connect\ListReplicationFindings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\ReplicationFinding> $ReplicationFindingsList
 * @property list<Shapes\ApproximateDriftedResourceCount>|null $ApproximateDriftedResourceCounts
 * @property string|null $NextToken
 * @property list<Shapes\ResourceReplicationStatus>|null $ResourceReplicationStatuses
 */
class ListReplicationFindingsResponse extends Response
{
}
