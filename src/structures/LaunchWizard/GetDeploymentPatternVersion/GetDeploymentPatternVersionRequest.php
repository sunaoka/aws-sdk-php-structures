<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\GetDeploymentPatternVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workloadName
 * @property string $deploymentPatternName
 * @property string $deploymentPatternVersionName
 */
class GetDeploymentPatternVersionRequest extends Request
{
    /**
     * @param array{
     *     workloadName: string,
     *     deploymentPatternName: string,
     *     deploymentPatternVersionName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
