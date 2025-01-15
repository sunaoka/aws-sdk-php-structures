<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomainHealth;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'Active'|'Processing'|'NotAvailable'|null $DomainState
 * @property string|null $AvailabilityZoneCount
 * @property string|null $ActiveAvailabilityZoneCount
 * @property string|null $StandByAvailabilityZoneCount
 * @property string|null $DataNodeCount
 * @property bool|null $DedicatedMaster
 * @property string|null $MasterEligibleNodeCount
 * @property string|null $WarmNodeCount
 * @property 'Available'|'UnAvailable'|null $MasterNode
 * @property 'Red'|'Yellow'|'Green'|'NotAvailable'|null $ClusterHealth
 * @property string|null $TotalShards
 * @property string|null $TotalUnAssignedShards
 * @property list<Shapes\EnvironmentInfo>|null $EnvironmentInformation
 */
class DescribeDomainHealthResponse extends Response
{
}
