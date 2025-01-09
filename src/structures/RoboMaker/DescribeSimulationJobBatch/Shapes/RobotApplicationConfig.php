<?php

namespace Sunaoka\Aws\Structures\RoboMaker\DescribeSimulationJobBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $application
 * @property string $applicationVersion
 * @property LaunchConfig $launchConfig
 * @property list<UploadConfiguration> $uploadConfigurations
 * @property bool $useDefaultUploadConfigurations
 * @property list<Tool> $tools
 * @property bool $useDefaultTools
 */
class RobotApplicationConfig extends Shape
{
    /**
     * @param array{
     *     application: string,
     *     applicationVersion?: string,
     *     launchConfig: LaunchConfig,
     *     uploadConfigurations?: list<UploadConfiguration>,
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
