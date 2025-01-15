<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\CreateConfigurationTemplate;

use Sunaoka\Aws\Structures\Response;

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
 * @property list<Shapes\ConfigurationOptionSetting>|null $OptionSettings
 */
class CreateConfigurationTemplateResponse extends Response
{
}
