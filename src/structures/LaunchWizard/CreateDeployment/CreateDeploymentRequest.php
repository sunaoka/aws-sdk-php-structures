<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\CreateDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workloadName
 * @property string $deploymentPatternName
 * @property string $name
 * @property array<string, string> $specifications
 * @property bool|null $dryRun
 * @property array<string, string>|null $tags
 */
class CreateDeploymentRequest extends Request
{
    /**
     * @param array{
     *     workloadName: string,
     *     deploymentPatternName: string,
     *     name: string,
     *     specifications: array<string, string>,
     *     dryRun?: bool|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
