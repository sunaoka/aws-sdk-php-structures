<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\GetDeploymentPatternVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $deploymentPatternVersionName
 * @property string|null $description
 * @property string|null $documentationUrl
 * @property string|null $workloadName
 * @property string|null $deploymentPatternName
 */
class DeploymentPatternVersionDataSummary extends Shape
{
    /**
     * @param array{
     *     deploymentPatternVersionName?: string|null,
     *     description?: string|null,
     *     documentationUrl?: string|null,
     *     workloadName?: string|null,
     *     deploymentPatternName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
