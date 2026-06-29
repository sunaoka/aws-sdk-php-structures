<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateExperimentRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationIdentifier
 * @property string $ExperimentDefinitionIdentifier
 * @property int<1, max> $Run
 * @property string|null $Description
 * @property float|null $ExposurePercentage
 * @property Shapes\TreatmentOverrides|null $TreatmentOverrides
 * @property Shapes\DeploymentParameters|null $DeploymentParameters
 */
class UpdateExperimentRunRequest extends Request
{
    /**
     * @param array{
     *     ApplicationIdentifier: string,
     *     ExperimentDefinitionIdentifier: string,
     *     Run: int<1, max>,
     *     Description?: string|null,
     *     ExposurePercentage?: float|null,
     *     TreatmentOverrides?: Shapes\TreatmentOverrides|null,
     *     DeploymentParameters?: Shapes\DeploymentParameters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
