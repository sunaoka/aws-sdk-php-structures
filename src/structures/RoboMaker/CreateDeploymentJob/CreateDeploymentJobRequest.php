<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateDeploymentJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DeploymentConfig $deploymentConfig
 * @property string $clientRequestToken
 * @property string $fleet
 * @property list<Shapes\DeploymentApplicationConfig> $deploymentApplicationConfigs
 * @property array<string, string> $tags
 */
class CreateDeploymentJobRequest extends Request
{
    /**
     * @param array{
     *     deploymentConfig?: Shapes\DeploymentConfig,
     *     clientRequestToken: string,
     *     fleet: string,
     *     deploymentApplicationConfigs: list<Shapes\DeploymentApplicationConfig>,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
