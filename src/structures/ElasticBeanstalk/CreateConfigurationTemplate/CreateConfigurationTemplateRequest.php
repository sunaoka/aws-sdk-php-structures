<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\CreateConfigurationTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property string $TemplateName
 * @property string|null $SolutionStackName
 * @property string|null $PlatformArn
 * @property Shapes\SourceConfiguration|null $SourceConfiguration
 * @property string|null $EnvironmentId
 * @property string|null $Description
 * @property list<Shapes\ConfigurationOptionSetting>|null $OptionSettings
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateConfigurationTemplateRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     TemplateName: string,
     *     SolutionStackName?: string|null,
     *     PlatformArn?: string|null,
     *     SourceConfiguration?: Shapes\SourceConfiguration|null,
     *     EnvironmentId?: string|null,
     *     Description?: string|null,
     *     OptionSettings?: list<Shapes\ConfigurationOptionSetting>|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
