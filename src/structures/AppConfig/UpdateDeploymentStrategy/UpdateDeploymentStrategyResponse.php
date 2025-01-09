<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateDeploymentStrategy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Id
 * @property string $Name
 * @property string $Description
 * @property int $DeploymentDurationInMinutes
 * @property 'LINEAR'|'EXPONENTIAL' $GrowthType
 * @property float $GrowthFactor
 * @property int $FinalBakeTimeInMinutes
 * @property 'NONE'|'SSM_DOCUMENT' $ReplicateTo
 */
class UpdateDeploymentStrategyResponse extends Response
{
}
