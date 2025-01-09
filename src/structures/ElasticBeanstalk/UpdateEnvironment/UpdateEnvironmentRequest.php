<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\UpdateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property string $EnvironmentId
 * @property string $EnvironmentName
 * @property string $GroupName
 * @property string $Description
 * @property Shapes\EnvironmentTier $Tier
 * @property string $VersionLabel
 * @property string $TemplateName
 * @property string $SolutionStackName
 * @property string $PlatformArn
 * @property list<Shapes\ConfigurationOptionSetting> $OptionSettings
 * @property list<Shapes\OptionSpecification> $OptionsToRemove
 */
class UpdateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName?: string,
     *     EnvironmentId?: string,
     *     EnvironmentName?: string,
     *     GroupName?: string,
     *     Description?: string,
     *     Tier?: Shapes\EnvironmentTier,
     *     VersionLabel?: string,
     *     TemplateName?: string,
     *     SolutionStackName?: string,
     *     PlatformArn?: string,
     *     OptionSettings?: list<Shapes\ConfigurationOptionSetting>,
     *     OptionsToRemove?: list<Shapes\OptionSpecification>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
