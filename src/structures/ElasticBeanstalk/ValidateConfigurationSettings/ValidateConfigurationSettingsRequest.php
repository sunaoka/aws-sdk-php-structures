<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\ValidateConfigurationSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property string|null $TemplateName
 * @property string|null $EnvironmentName
 * @property list<Shapes\ConfigurationOptionSetting> $OptionSettings
 */
class ValidateConfigurationSettingsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     TemplateName?: string|null,
     *     EnvironmentName?: string|null,
     *     OptionSettings: list<Shapes\ConfigurationOptionSetting>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
