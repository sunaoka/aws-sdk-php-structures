<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\CreateDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deploymentPatternName
 * @property bool $dryRun
 * @property string $name
 * @property array<string, string> $specifications
 * @property array<string, string> $tags
 * @property string $workloadName
 */
class CreateDeploymentRequest extends Request
{
    /**
     * @param array{
     *     deploymentPatternName: string,
     *     dryRun?: bool,
     *     name: string,
     *     specifications: array<string, string>,
     *     tags?: array<string, string>,
     *     workloadName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
