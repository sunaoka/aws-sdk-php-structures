<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListSignalMaps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $Description
 * @property string $Id
 * @property \Aws\Api\DateTimeResult $ModifiedAt
 * @property 'NOT_DEPLOYED'|'DRY_RUN_DEPLOYMENT_COMPLETE'|'DRY_RUN_DEPLOYMENT_FAILED'|'DRY_RUN_DEPLOYMENT_IN_PROGRESS'|'DEPLOYMENT_COMPLETE'|'DEPLOYMENT_FAILED'|'DEPLOYMENT_IN_PROGRESS'|'DELETE_COMPLETE'|'DELETE_FAILED'|'DELETE_IN_PROGRESS' $MonitorDeploymentStatus
 * @property string $Name
 * @property 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_REVERTED'|'UPDATE_FAILED'|'READY'|'NOT_READY' $Status
 * @property array<string, string> $Tags
 */
class SignalMapSummary extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     CreatedAt: \Aws\Api\DateTimeResult,
     *     Description?: string,
     *     Id: string,
     *     ModifiedAt?: \Aws\Api\DateTimeResult,
     *     MonitorDeploymentStatus: 'NOT_DEPLOYED'|'DRY_RUN_DEPLOYMENT_COMPLETE'|'DRY_RUN_DEPLOYMENT_FAILED'|'DRY_RUN_DEPLOYMENT_IN_PROGRESS'|'DEPLOYMENT_COMPLETE'|'DEPLOYMENT_FAILED'|'DEPLOYMENT_IN_PROGRESS'|'DELETE_COMPLETE'|'DELETE_FAILED'|'DELETE_IN_PROGRESS',
     *     Name: string,
     *     Status: 'CREATE_IN_PROGRESS'|'CREATE_COMPLETE'|'CREATE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_REVERTED'|'UPDATE_FAILED'|'READY'|'NOT_READY',
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
