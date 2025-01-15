<?php

namespace Sunaoka\Aws\Structures\Panorama\ListApplicationInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationInstanceId
 * @property string|null $Arn
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property string|null $DefaultRuntimeContextDevice
 * @property string|null $DefaultRuntimeContextDeviceName
 * @property string|null $Description
 * @property 'RUNNING'|'ERROR'|'NOT_AVAILABLE'|null $HealthStatus
 * @property string|null $Name
 * @property list<ReportedRuntimeContextState>|null $RuntimeContextStates
 * @property 'DEPLOYMENT_PENDING'|'DEPLOYMENT_REQUESTED'|'DEPLOYMENT_IN_PROGRESS'|'DEPLOYMENT_ERROR'|'DEPLOYMENT_SUCCEEDED'|'REMOVAL_PENDING'|'REMOVAL_REQUESTED'|'REMOVAL_IN_PROGRESS'|'REMOVAL_FAILED'|'REMOVAL_SUCCEEDED'|'DEPLOYMENT_FAILED'|null $Status
 * @property string|null $StatusDescription
 * @property array<string, string>|null $Tags
 */
class ApplicationInstance extends Shape
{
    /**
     * @param array{
     *     ApplicationInstanceId?: string|null,
     *     Arn?: string|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     DefaultRuntimeContextDevice?: string|null,
     *     DefaultRuntimeContextDeviceName?: string|null,
     *     Description?: string|null,
     *     HealthStatus?: 'RUNNING'|'ERROR'|'NOT_AVAILABLE'|null,
     *     Name?: string|null,
     *     RuntimeContextStates?: list<ReportedRuntimeContextState>|null,
     *     Status?: 'DEPLOYMENT_PENDING'|'DEPLOYMENT_REQUESTED'|'DEPLOYMENT_IN_PROGRESS'|'DEPLOYMENT_ERROR'|'DEPLOYMENT_SUCCEEDED'|'REMOVAL_PENDING'|'REMOVAL_REQUESTED'|'REMOVAL_IN_PROGRESS'|'REMOVAL_FAILED'|'REMOVAL_SUCCEEDED'|'DEPLOYMENT_FAILED'|null,
     *     StatusDescription?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
