<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\CreateEnvironment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property string|null $EnvironmentName
 * @property string|null $GroupName
 * @property string|null $Description
 * @property string|null $CNAMEPrefix
 * @property Shapes\EnvironmentTier|null $Tier
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $VersionLabel
 * @property string|null $TemplateName
 * @property string|null $SolutionStackName
 * @property string|null $PlatformArn
 * @property list<Shapes\ConfigurationOptionSetting>|null $OptionSettings
 * @property list<Shapes\OptionSpecification>|null $OptionsToRemove
 * @property string|null $OperationsRole
 */
class CreateEnvironmentRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     EnvironmentName?: string|null,
     *     GroupName?: string|null,
     *     Description?: string|null,
     *     CNAMEPrefix?: string|null,
     *     Tier?: Shapes\EnvironmentTier|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     VersionLabel?: string|null,
     *     TemplateName?: string|null,
     *     SolutionStackName?: string|null,
     *     PlatformArn?: string|null,
     *     OptionSettings?: list<Shapes\ConfigurationOptionSetting>|null,
     *     OptionsToRemove?: list<Shapes\OptionSpecification>|null,
     *     OperationsRole?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
