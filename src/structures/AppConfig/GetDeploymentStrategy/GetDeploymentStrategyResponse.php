<?php

namespace Sunaoka\Aws\Structures\AppConfig\GetDeploymentStrategy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Id
 * @property string $Name
 * @property string $Description
 * @property int<0, 1440> $DeploymentDurationInMinutes
 * @property 'LINEAR'|'EXPONENTIAL' $GrowthType
 * @property float $GrowthFactor
 * @property int<0, 1440> $FinalBakeTimeInMinutes
 * @property 'NONE'|'SSM_DOCUMENT' $ReplicateTo
 */
class GetDeploymentStrategyResponse extends Response
{
}
