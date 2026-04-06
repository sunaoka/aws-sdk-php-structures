<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\GetWorkloadDeploymentPattern;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deploymentPatternName
 * @property string $workloadName
 */
class GetWorkloadDeploymentPatternRequest extends Request
{
    /**
     * @param array{
     *     deploymentPatternName: string,
     *     workloadName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
