<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribeApplicationInstance;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ApplicationInstanceId
 * @property string|null $ApplicationInstanceIdToReplace
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $DefaultRuntimeContextDevice
 * @property string|null $DefaultRuntimeContextDeviceName
 * @property string|null $Description
 * @property 'RUNNING'|'ERROR'|'NOT_AVAILABLE'|null $HealthStatus
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedTime
 * @property string|null $Name
 * @property list<Shapes\ReportedRuntimeContextState>|null $RuntimeContextStates
 * @property string|null $RuntimeRoleArn
 * @property 'DEPLOYMENT_PENDING'|'DEPLOYMENT_REQUESTED'|'DEPLOYMENT_IN_PROGRESS'|'DEPLOYMENT_ERROR'|'DEPLOYMENT_SUCCEEDED'|'REMOVAL_PENDING'|'REMOVAL_REQUESTED'|'REMOVAL_IN_PROGRESS'|'REMOVAL_FAILED'|'REMOVAL_SUCCEEDED'|'DEPLOYMENT_FAILED'|null $Status
 * @property string|null $StatusDescription
 * @property array<string, string>|null $Tags
 */
class DescribeApplicationInstanceResponse extends Response
{
}
