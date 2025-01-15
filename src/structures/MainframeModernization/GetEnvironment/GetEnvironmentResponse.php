<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetEnvironment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int|null $actualCapacity
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string|null $description
 * @property 'microfocus'|'bluage' $engineType
 * @property string $engineVersion
 * @property string $environmentArn
 * @property string $environmentId
 * @property Shapes\HighAvailabilityConfig|null $highAvailabilityConfig
 * @property string $instanceType
 * @property string|null $kmsKeyId
 * @property string|null $loadBalancerArn
 * @property string $name
 * @property 'ipv4'|'dual'|null $networkType
 * @property Shapes\PendingMaintenance|null $pendingMaintenance
 * @property string|null $preferredMaintenanceWindow
 * @property bool|null $publiclyAccessible
 * @property list<string> $securityGroupIds
 * @property 'Creating'|'Available'|'Updating'|'Deleting'|'Failed'|'UnHealthy' $status
 * @property string|null $statusReason
 * @property list<Shapes\StorageConfiguration>|null $storageConfigurations
 * @property list<string> $subnetIds
 * @property array<string, string>|null $tags
 * @property string $vpcId
 */
class GetEnvironmentResponse extends Response
{
}
