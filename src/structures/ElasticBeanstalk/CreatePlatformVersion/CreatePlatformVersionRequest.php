<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\CreatePlatformVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PlatformName
 * @property string $PlatformVersion
 * @property Shapes\S3Location $PlatformDefinitionBundle
 * @property string $EnvironmentName
 * @property list<Shapes\ConfigurationOptionSetting> $OptionSettings
 * @property list<Shapes\Tag> $Tags
 */
class CreatePlatformVersionRequest extends Request
{
    /**
     * @param array{
     *     PlatformName: string,
     *     PlatformVersion: string,
     *     PlatformDefinitionBundle: Shapes\S3Location,
     *     EnvironmentName?: string,
     *     OptionSettings?: list<Shapes\ConfigurationOptionSetting>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
