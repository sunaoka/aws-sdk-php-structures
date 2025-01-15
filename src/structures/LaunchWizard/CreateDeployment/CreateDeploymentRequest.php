<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\CreateDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deploymentPatternName
 * @property bool|null $dryRun
 * @property string $name
 * @property array<string, string> $specifications
 * @property array<string, string>|null $tags
 * @property string $workloadName
 */
class CreateDeploymentRequest extends Request
{
    /**
     * @param array{
     *     deploymentPatternName: string,
     *     dryRun?: bool|null,
     *     name: string,
     *     specifications: array<string, string>,
     *     tags?: array<string, string>|null,
     *     workloadName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
