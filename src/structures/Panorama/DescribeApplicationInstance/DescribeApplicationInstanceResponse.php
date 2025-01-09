<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeApplicationInstance;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ApplicationInstanceId
 * @property string $ApplicationInstanceIdToReplace
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $DefaultRuntimeContextDevice
 * @property string $DefaultRuntimeContextDeviceName
 * @property string $Description
 * @property 'RUNNING'|'ERROR'|'NOT_AVAILABLE' $HealthStatus
 * @property \Aws\Api\DateTimeResult $LastUpdatedTime
 * @property string $Name
 * @property list<Shapes\ReportedRuntimeContextState> $RuntimeContextStates
 * @property string $RuntimeRoleArn
 * @property 'DEPLOYMENT_PENDING'|'DEPLOYMENT_REQUESTED'|'DEPLOYMENT_IN_PROGRESS'|'DEPLOYMENT_ERROR'|'DEPLOYMENT_SUCCEEDED'|'REMOVAL_PENDING'|'REMOVAL_REQUESTED'|'REMOVAL_IN_PROGRESS'|'REMOVAL_FAILED'|'REMOVAL_SUCCEEDED'|'DEPLOYMENT_FAILED' $Status
 * @property string $StatusDescription
 * @property array<string, string> $Tags
 */
class DescribeApplicationInstanceResponse extends Response
{
}
