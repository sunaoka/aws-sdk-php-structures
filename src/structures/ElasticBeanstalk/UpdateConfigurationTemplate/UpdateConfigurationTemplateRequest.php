<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\UpdateConfigurationTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property string $TemplateName
 * @property string $Description
 * @property list<Shapes\ConfigurationOptionSetting> $OptionSettings
 * @property list<Shapes\OptionSpecification> $OptionsToRemove
 */
class UpdateConfigurationTemplateRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     TemplateName: string,
     *     Description?: string,
     *     OptionSettings?: list<Shapes\ConfigurationOptionSetting>,
     *     OptionsToRemove?: list<Shapes\OptionSpecification>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
