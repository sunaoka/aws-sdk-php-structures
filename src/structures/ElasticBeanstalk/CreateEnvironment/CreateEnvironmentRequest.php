<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\CreateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property string $EnvironmentName
 * @property string $GroupName
 * @property string $Description
 * @property string $CNAMEPrefix
 * @property Shapes\EnvironmentTier $Tier
 * @property list<Shapes\Tag> $Tags
 * @property string $VersionLabel
 * @property string $TemplateName
 * @property string $SolutionStackName
 * @property string $PlatformArn
 * @property list<Shapes\ConfigurationOptionSetting> $OptionSettings
 * @property list<Shapes\OptionSpecification> $OptionsToRemove
 * @property string $OperationsRole
 */
class CreateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     EnvironmentName?: string,
     *     GroupName?: string,
     *     Description?: string,
     *     CNAMEPrefix?: string,
     *     Tier?: Shapes\EnvironmentTier,
     *     Tags?: list<Shapes\Tag>,
     *     VersionLabel?: string,
     *     TemplateName?: string,
     *     SolutionStackName?: string,
     *     PlatformArn?: string,
     *     OptionSettings?: list<Shapes\ConfigurationOptionSetting>,
     *     OptionsToRemove?: list<Shapes\OptionSpecification>,
     *     OperationsRole?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
