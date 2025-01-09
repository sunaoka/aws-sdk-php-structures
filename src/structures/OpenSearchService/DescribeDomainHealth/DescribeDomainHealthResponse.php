<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainHealth;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Active'|'Processing'|'NotAvailable' $DomainState
 * @property string $AvailabilityZoneCount
 * @property string $ActiveAvailabilityZoneCount
 * @property string $StandByAvailabilityZoneCount
 * @property string $DataNodeCount
 * @property bool $DedicatedMaster
 * @property string $MasterEligibleNodeCount
 * @property string $WarmNodeCount
 * @property 'Available'|'UnAvailable' $MasterNode
 * @property 'Red'|'Yellow'|'Green'|'NotAvailable' $ClusterHealth
 * @property string $TotalShards
 * @property string $TotalUnAssignedShards
 * @property list<Shapes\EnvironmentInfo> $EnvironmentInformation
 */
class DescribeDomainHealthResponse extends Response
{
}
