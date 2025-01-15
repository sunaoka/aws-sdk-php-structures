<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetAutoSnapshots;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $resourceName
 * @property 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket'|null $resourceType
 * @property list<Shapes\AutoSnapshotDetails>|null $autoSnapshots
 */
class GetAutoSnapshotsResponse extends Response
{
}
