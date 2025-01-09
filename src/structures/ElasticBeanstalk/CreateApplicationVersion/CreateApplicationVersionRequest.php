<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\CreateApplicationVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property string $VersionLabel
 * @property string $Description
 * @property Shapes\SourceBuildInformation $SourceBuildInformation
 * @property Shapes\S3Location $SourceBundle
 * @property Shapes\BuildConfiguration $BuildConfiguration
 * @property bool $AutoCreateApplication
 * @property bool $Process
 * @property list<Shapes\Tag> $Tags
 */
class CreateApplicationVersionRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     VersionLabel: string,
     *     Description?: string,
     *     SourceBuildInformation?: Shapes\SourceBuildInformation,
     *     SourceBundle?: Shapes\S3Location,
     *     BuildConfiguration?: Shapes\BuildConfiguration,
     *     AutoCreateApplication?: bool,
     *     Process?: bool,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
