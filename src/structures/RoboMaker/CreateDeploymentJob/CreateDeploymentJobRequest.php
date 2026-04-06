<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateDeploymentJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DeploymentConfig|null $deploymentConfig
 * @property string $clientRequestToken
 * @property string $fleet
 * @property list<Shapes\DeploymentApplicationConfig> $deploymentApplicationConfigs
 * @property array<string, string>|null $tags
 */
class CreateDeploymentJobRequest extends Request
{
    /**
     * @param array{
     *     deploymentConfig?: Shapes\DeploymentConfig|null,
     *     clientRequestToken: string,
     *     fleet: string,
     *     deploymentApplicationConfigs: list<Shapes\DeploymentApplicationConfig>,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
