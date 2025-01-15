<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateDeploymentStrategy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property string|null $Description
 * @property int<0, 1440>|null $DeploymentDurationInMinutes
 * @property 'LINEAR'|'EXPONENTIAL'|null $GrowthType
 * @property float|null $GrowthFactor
 * @property int<0, 1440>|null $FinalBakeTimeInMinutes
 * @property 'NONE'|'SSM_DOCUMENT'|null $ReplicateTo
 */
class UpdateDeploymentStrategyResponse extends Response
{
}
