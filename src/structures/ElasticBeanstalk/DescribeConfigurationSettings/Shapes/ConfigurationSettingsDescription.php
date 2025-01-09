<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\DescribeConfigurationSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SolutionStackName
 * @property string $PlatformArn
 * @property string $ApplicationName
 * @property string $TemplateName
 * @property string $Description
 * @property string $EnvironmentName
 * @property 'deployed'|'pending'|'failed' $DeploymentStatus
 * @property \Aws\Api\DateTimeResult $DateCreated
 * @property \Aws\Api\DateTimeResult $DateUpdated
 * @property list<ConfigurationOptionSetting> $OptionSettings
 */
class ConfigurationSettingsDescription extends Shape
{
    /**
     * @param array{
     *     SolutionStackName?: string,
     *     PlatformArn?: string,
     *     ApplicationName?: string,
     *     TemplateName?: string,
     *     Description?: string,
     *     EnvironmentName?: string,
     *     DeploymentStatus?: 'deployed'|'pending'|'failed',
     *     DateCreated?: \Aws\Api\DateTimeResult,
     *     DateUpdated?: \Aws\Api\DateTimeResult,
     *     OptionSettings?: list<ConfigurationOptionSetting>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
