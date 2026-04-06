<?php

namespace Sunaoka\Aws\Structures\LaunchWizard\UpdateDeployment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deploymentId
 * @property array<string, string> $specifications
 * @property string|null $workloadVersionName
 * @property string|null $deploymentPatternVersionName
 * @property bool|null $dryRun
 * @property bool|null $force
 */
class UpdateDeploymentRequest extends Request
{
    /**
     * @param array{
     *     deploymentId: string,
     *     specifications: array<string, string>,
     *     workloadVersionName?: string|null,
     *     deploymentPatternVersionName?: string|null,
     *     dryRun?: bool|null,
     *     force?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
