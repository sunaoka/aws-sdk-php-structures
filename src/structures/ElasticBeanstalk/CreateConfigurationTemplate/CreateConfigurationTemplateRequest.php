<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\CreateConfigurationTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property string $TemplateName
 * @property string $SolutionStackName
 * @property string $PlatformArn
 * @property Shapes\SourceConfiguration $SourceConfiguration
 * @property string $EnvironmentId
 * @property string $Description
 * @property list<Shapes\ConfigurationOptionSetting> $OptionSettings
 * @property list<Shapes\Tag> $Tags
 */
class CreateConfigurationTemplateRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     TemplateName: string,
     *     SolutionStackName?: string,
     *     PlatformArn?: string,
     *     SourceConfiguration?: Shapes\SourceConfiguration,
     *     EnvironmentId?: string,
     *     Description?: string,
     *     OptionSettings?: list<Shapes\ConfigurationOptionSetting>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
