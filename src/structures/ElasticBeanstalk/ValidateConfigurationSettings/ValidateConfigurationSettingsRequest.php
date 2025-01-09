<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\ValidateConfigurationSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property string $TemplateName
 * @property string $EnvironmentName
 * @property list<Shapes\ConfigurationOptionSetting> $OptionSettings
 */
class ValidateConfigurationSettingsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     TemplateName?: string,
     *     EnvironmentName?: string,
     *     OptionSettings: list<Shapes\ConfigurationOptionSetting>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
