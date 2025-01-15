<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetApplication;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $applicationArn
 * @property string $applicationId
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property Shapes\DeployedVersionSummary|null $deployedVersion
 * @property string|null $description
 * @property 'microfocus'|'bluage' $engineType
 * @property string|null $environmentId
 * @property string|null $kmsKeyId
 * @property \Aws\Api\DateTimeResult|null $lastStartTime
 * @property Shapes\ApplicationVersionSummary $latestVersion
 * @property list<string>|null $listenerArns
 * @property list<int>|null $listenerPorts
 * @property string|null $loadBalancerDnsName
 * @property list<Shapes\LogGroupSummary>|null $logGroups
 * @property string $name
 * @property string|null $roleArn
 * @property 'Creating'|'Created'|'Available'|'Ready'|'Starting'|'Running'|'Stopping'|'Stopped'|'Failed'|'Deleting'|'Deleting From Environment' $status
 * @property string|null $statusReason
 * @property array<string, string>|null $tags
 * @property list<string>|null $targetGroupArns
 */
class GetApplicationResponse extends Response
{
}
