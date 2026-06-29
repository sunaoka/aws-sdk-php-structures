<?php

namespace Sunaoka\Aws\Structures\AppConfig\StopExperimentRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationIdentifier
 * @property string $ExperimentDefinitionIdentifier
 * @property int<1, max> $Run
 * @property Shapes\ExperimentRunResult|null $Result
 * @property Shapes\DeploymentParameters|null $DeploymentParameters
 */
class StopExperimentRunRequest extends Request
{
    /**
     * @param array{
     *     ApplicationIdentifier: string,
     *     ExperimentDefinitionIdentifier: string,
     *     Run: int<1, max>,
     *     Result?: Shapes\ExperimentRunResult|null,
     *     DeploymentParameters?: Shapes\DeploymentParameters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
