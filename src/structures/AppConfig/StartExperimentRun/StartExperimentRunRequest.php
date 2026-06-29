<?php

namespace Sunaoka\Aws\Structures\AppConfig\StartExperimentRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationIdentifier
 * @property string $ExperimentDefinitionIdentifier
 * @property string|null $Description
 * @property float|null $ExposurePercentage
 * @property Shapes\TreatmentOverrides|null $TreatmentOverrides
 * @property array<string, string>|null $Tags
 * @property Shapes\DeploymentParameters|null $DeploymentParameters
 */
class StartExperimentRunRequest extends Request
{
    /**
     * @param array{
     *     ApplicationIdentifier: string,
     *     ExperimentDefinitionIdentifier: string,
     *     Description?: string|null,
     *     ExposurePercentage?: float|null,
     *     TreatmentOverrides?: Shapes\TreatmentOverrides|null,
     *     Tags?: array<string, string>|null,
     *     DeploymentParameters?: Shapes\DeploymentParameters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
