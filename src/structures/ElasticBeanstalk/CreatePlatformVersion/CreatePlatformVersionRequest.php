<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\CreatePlatformVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PlatformName
 * @property string $PlatformVersion
 * @property Shapes\S3Location $PlatformDefinitionBundle
 * @property string|null $EnvironmentName
 * @property list<Shapes\ConfigurationOptionSetting>|null $OptionSettings
 * @property list<Shapes\Tag>|null $Tags
 */
class CreatePlatformVersionRequest extends Request
{
    /**
     * @param array{
     *     PlatformName: string,
     *     PlatformVersion: string,
     *     PlatformDefinitionBundle: Shapes\S3Location,
     *     EnvironmentName?: string|null,
     *     OptionSettings?: list<Shapes\ConfigurationOptionSetting>|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
