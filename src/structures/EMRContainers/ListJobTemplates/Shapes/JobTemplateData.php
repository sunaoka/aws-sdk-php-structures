<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $executionRoleArn
 * @property string $releaseLabel
 * @property ParametricConfigurationOverrides|null $configurationOverrides
 * @property JobDriver $jobDriver
 * @property array<string, TemplateParameterConfiguration>|null $parameterConfiguration
 * @property array<string, string>|null $jobTags
 */
class JobTemplateData extends Shape
{
    /**
     * @param array{
     *     executionRoleArn: string,
     *     releaseLabel: string,
     *     configurationOverrides?: ParametricConfigurationOverrides|null,
     *     jobDriver: JobDriver,
     *     parameterConfiguration?: array<string, TemplateParameterConfiguration>|null,
     *     jobTags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
