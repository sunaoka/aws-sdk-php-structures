<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetEnvironment;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $actualCapacity
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $description
 * @property 'microfocus'|'bluage' $engineType
 * @property string $engineVersion
 * @property string $environmentArn
 * @property string $environmentId
 * @property Shapes\HighAvailabilityConfig $highAvailabilityConfig
 * @property string $instanceType
 * @property string $kmsKeyId
 * @property string $loadBalancerArn
 * @property string $name
 * @property 'ipv4'|'dual' $networkType
 * @property Shapes\PendingMaintenance $pendingMaintenance
 * @property string $preferredMaintenanceWindow
 * @property bool $publiclyAccessible
 * @property list<string> $securityGroupIds
 * @property 'Creating'|'Available'|'Updating'|'Deleting'|'Failed'|'UnHealthy' $status
 * @property string $statusReason
 * @property list<Shapes\StorageConfiguration> $storageConfigurations
 * @property list<string> $subnetIds
 * @property array<string, string> $tags
 * @property string $vpcId
 */
class GetEnvironmentResponse extends Response
{
}
