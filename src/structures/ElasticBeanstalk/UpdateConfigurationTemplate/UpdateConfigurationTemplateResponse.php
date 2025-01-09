<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\UpdateConfigurationTemplate;

use Sunaoka\Aws\Structures\Response;

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
 * @property list<Shapes\ConfigurationOptionSetting> $OptionSettings
 */
class UpdateConfigurationTemplateResponse extends Response
{
}
