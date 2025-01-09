<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeSimulationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $application
 * @property string $applicationVersion
 * @property LaunchConfig $launchConfig
 * @property list<UploadConfiguration> $uploadConfigurations
 * @property list<WorldConfig> $worldConfigs
 * @property bool $useDefaultUploadConfigurations
 * @property list<Tool> $tools
 * @property bool $useDefaultTools
 */
class SimulationApplicationConfig extends Shape
{
    /**
     * @param array{
     *     application: string,
     *     applicationVersion?: string,
     *     launchConfig: LaunchConfig,
     *     uploadConfigurations?: list<UploadConfiguration>,
     *     worldConfigs?: list<WorldConfig>,
     *     useDefaultUploadConfigurations?: bool,
     *     tools?: list<Tool>,
     *     useDefaultTools?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
