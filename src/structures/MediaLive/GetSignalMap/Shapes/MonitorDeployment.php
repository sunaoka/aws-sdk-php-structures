<?php

namespace Sunaoka\Aws\Structures\MediaLive\GetSignalMap\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DetailsUri
 * @property string|null $ErrorMessage
 * @property 'NOT_DEPLOYED'|'DRY_RUN_DEPLOYMENT_COMPLETE'|'DRY_RUN_DEPLOYMENT_FAILED'|'DRY_RUN_DEPLOYMENT_IN_PROGRESS'|'DEPLOYMENT_COMPLETE'|'DEPLOYMENT_FAILED'|'DEPLOYMENT_IN_PROGRESS'|'DELETE_COMPLETE'|'DELETE_FAILED'|'DELETE_IN_PROGRESS' $Status
 */
class MonitorDeployment extends Shape
{
    /**
     * @param array{
     *     DetailsUri?: string|null,
     *     ErrorMessage?: string|null,
     *     Status: 'NOT_DEPLOYED'|'DRY_RUN_DEPLOYMENT_COMPLETE'|'DRY_RUN_DEPLOYMENT_FAILED'|'DRY_RUN_DEPLOYMENT_IN_PROGRESS'|'DEPLOYMENT_COMPLETE'|'DEPLOYMENT_FAILED'|'DEPLOYMENT_IN_PROGRESS'|'DELETE_COMPLETE'|'DELETE_FAILED'|'DELETE_IN_PROGRESS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
