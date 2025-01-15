<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\UpdateConfigurationTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property string $TemplateName
 * @property string|null $Description
 * @property list<Shapes\ConfigurationOptionSetting>|null $OptionSettings
 * @property list<Shapes\OptionSpecification>|null $OptionsToRemove
 */
class UpdateConfigurationTemplateRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     TemplateName: string,
     *     Description?: string|null,
     *     OptionSettings?: list<Shapes\ConfigurationOptionSetting>|null,
     *     OptionsToRemove?: list<Shapes\OptionSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
