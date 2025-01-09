<?php

namespace Sunaoka\Aws\Structures\Panorama\ListApplicationInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationInstanceId
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $DefaultRuntimeContextDevice
 * @property string $DefaultRuntimeContextDeviceName
 * @property string $Description
 * @property 'RUNNING'|'ERROR'|'NOT_AVAILABLE' $HealthStatus
 * @property string $Name
 * @property list<ReportedRuntimeContextState> $RuntimeContextStates
 * @property 'DEPLOYMENT_PENDING'|'DEPLOYMENT_REQUESTED'|'DEPLOYMENT_IN_PROGRESS'|'DEPLOYMENT_ERROR'|'DEPLOYMENT_SUCCEEDED'|'REMOVAL_PENDING'|'REMOVAL_REQUESTED'|'REMOVAL_IN_PROGRESS'|'REMOVAL_FAILED'|'REMOVAL_SUCCEEDED'|'DEPLOYMENT_FAILED' $Status
 * @property string $StatusDescription
 * @property array<string, string> $Tags
 */
class ApplicationInstance extends Shape
{
    /**
     * @param array{
     *     ApplicationInstanceId?: string,
     *     Arn?: string,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     DefaultRuntimeContextDevice?: string,
     *     DefaultRuntimeContextDeviceName?: string,
     *     Description?: string,
     *     HealthStatus?: 'RUNNING'|'ERROR'|'NOT_AVAILABLE',
     *     Name?: string,
     *     RuntimeContextStates?: list<ReportedRuntimeContextState>,
     *     Status?: 'DEPLOYMENT_PENDING'|'DEPLOYMENT_REQUESTED'|'DEPLOYMENT_IN_PROGRESS'|'DEPLOYMENT_ERROR'|'DEPLOYMENT_SUCCEEDED'|'REMOVAL_PENDING'|'REMOVAL_REQUESTED'|'REMOVAL_IN_PROGRESS'|'REMOVAL_FAILED'|'REMOVAL_SUCCEEDED'|'DEPLOYMENT_FAILED',
     *     StatusDescription?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
