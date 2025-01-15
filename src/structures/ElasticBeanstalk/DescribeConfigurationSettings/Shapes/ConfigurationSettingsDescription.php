<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeConfigurationSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SolutionStackName
 * @property string|null $PlatformArn
 * @property string|null $ApplicationName
 * @property string|null $TemplateName
 * @property string|null $Description
 * @property string|null $EnvironmentName
 * @property 'deployed'|'pending'|'failed'|null $DeploymentStatus
 * @property \Aws\Api\DateTimeResult|null $DateCreated
 * @property \Aws\Api\DateTimeResult|null $DateUpdated
 * @property list<ConfigurationOptionSetting>|null $OptionSettings
 */
class ConfigurationSettingsDescription extends Shape
{
    /**
     * @param array{
     *     SolutionStackName?: string|null,
     *     PlatformArn?: string|null,
     *     ApplicationName?: string|null,
     *     TemplateName?: string|null,
     *     Description?: string|null,
     *     EnvironmentName?: string|null,
     *     DeploymentStatus?: 'deployed'|'pending'|'failed'|null,
     *     DateCreated?: \Aws\Api\DateTimeResult|null,
     *     DateUpdated?: \Aws\Api\DateTimeResult|null,
     *     OptionSettings?: list<ConfigurationOptionSetting>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
