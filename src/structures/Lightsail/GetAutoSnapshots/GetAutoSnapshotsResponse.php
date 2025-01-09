<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetAutoSnapshots;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $resourceName
 * @property 'ContainerService'|'Instance'|'StaticIp'|'KeyPair'|'InstanceSnapshot'|'Domain'|'PeeredVpc'|'LoadBalancer'|'LoadBalancerTlsCertificate'|'Disk'|'DiskSnapshot'|'RelationalDatabase'|'RelationalDatabaseSnapshot'|'ExportSnapshotRecord'|'CloudFormationStackRecord'|'Alarm'|'ContactMethod'|'Distribution'|'Certificate'|'Bucket' $resourceType
 * @property list<Shapes\AutoSnapshotDetails> $autoSnapshots
 */
class GetAutoSnapshotsResponse extends Response
{
}
