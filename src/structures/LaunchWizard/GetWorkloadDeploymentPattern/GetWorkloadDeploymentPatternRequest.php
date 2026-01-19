<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\GetWorkloadDeploymentPattern;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workloadName
 * @property string $deploymentPatternName
 */
class GetWorkloadDeploymentPatternRequest extends Request
{
    /**
     * @param array{
     *     workloadName: string,
     *     deploymentPatternName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
