<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\UpdateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ApplicationName
 * @property string|null $EnvironmentId
 * @property string|null $EnvironmentName
 * @property string|null $GroupName
 * @property string|null $Description
 * @property Shapes\EnvironmentTier|null $Tier
 * @property string|null $VersionLabel
 * @property string|null $TemplateName
 * @property string|null $SolutionStackName
 * @property string|null $PlatformArn
 * @property list<Shapes\ConfigurationOptionSetting>|null $OptionSettings
 * @property list<Shapes\OptionSpecification>|null $OptionsToRemove
 */
class UpdateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName?: string|null,
     *     EnvironmentId?: string|null,
     *     EnvironmentName?: string|null,
     *     GroupName?: string|null,
     *     Description?: string|null,
     *     Tier?: Shapes\EnvironmentTier|null,
     *     VersionLabel?: string|null,
     *     TemplateName?: string|null,
     *     SolutionStackName?: string|null,
     *     PlatformArn?: string|null,
     *     OptionSettings?: list<Shapes\ConfigurationOptionSetting>|null,
     *     OptionsToRemove?: list<Shapes\OptionSpecification>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
