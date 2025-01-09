<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $applicationArn
 * @property string $applicationId
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property Shapes\DeployedVersionSummary $deployedVersion
 * @property string $description
 * @property 'microfocus'|'bluage' $engineType
 * @property string $environmentId
 * @property string $kmsKeyId
 * @property \Aws\Api\DateTimeResult $lastStartTime
 * @property Shapes\ApplicationVersionSummary $latestVersion
 * @property list<string> $listenerArns
 * @property list<int> $listenerPorts
 * @property string $loadBalancerDnsName
 * @property list<Shapes\LogGroupSummary> $logGroups
 * @property string $name
 * @property string $roleArn
 * @property 'Creating'|'Created'|'Available'|'Ready'|'Starting'|'Running'|'Stopping'|'Stopped'|'Failed'|'Deleting'|'Deleting From Environment' $status
 * @property string $statusReason
 * @property array<string, string> $tags
 * @property list<string> $targetGroupArns
 */
class GetApplicationResponse extends Response
{
}
