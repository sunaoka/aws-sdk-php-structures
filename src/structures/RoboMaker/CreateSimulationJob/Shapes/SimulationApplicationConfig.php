<?php

namespace Sunaoka\Aws\Structures\RoboMaker\CreateSimulationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $application
 * @property string|null $applicationVersion
 * @property LaunchConfig $launchConfig
 * @property list<UploadConfiguration>|null $uploadConfigurations
 * @property list<WorldConfig>|null $worldConfigs
 * @property bool|null $useDefaultUploadConfigurations
 * @property list<Tool>|null $tools
 * @property bool|null $useDefaultTools
 */
class SimulationApplicationConfig extends Shape
{
    /**
     * @param array{
     *     application: string,
     *     applicationVersion?: string|null,
     *     launchConfig: LaunchConfig,
     *     uploadConfigurations?: list<UploadConfiguration>|null,
     *     worldConfigs?: list<WorldConfig>|null,
     *     useDefaultUploadConfigurations?: bool|null,
     *     tools?: list<Tool>|null,
     *     useDefaultTools?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
