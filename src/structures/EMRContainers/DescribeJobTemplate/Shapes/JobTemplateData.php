<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DescribeJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $executionRoleArn
 * @property string $releaseLabel
 * @property ParametricConfigurationOverrides $configurationOverrides
 * @property JobDriver $jobDriver
 * @property array<string, TemplateParameterConfiguration> $parameterConfiguration
 * @property array<string, string> $jobTags
 */
class JobTemplateData extends Shape
{
    /**
     * @param array{
     *     executionRoleArn: string,
     *     releaseLabel: string,
     *     configurationOverrides?: ParametricConfigurationOverrides,
     *     jobDriver: JobDriver,
     *     parameterConfiguration?: array<string, TemplateParameterConfiguration>,
     *     jobTags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
