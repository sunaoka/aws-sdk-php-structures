<?php

namespace Sunaoka\Aws\Structures\ElasticBeanstalk\CreateApplicationVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationName
 * @property string $VersionLabel
 * @property string|null $Description
 * @property Shapes\SourceBuildInformation|null $SourceBuildInformation
 * @property Shapes\S3Location|null $SourceBundle
 * @property Shapes\BuildConfiguration|null $BuildConfiguration
 * @property bool|null $AutoCreateApplication
 * @property bool|null $Process
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateApplicationVersionRequest extends Request
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     VersionLabel: string,
     *     Description?: string|null,
     *     SourceBuildInformation?: Shapes\SourceBuildInformation|null,
     *     SourceBundle?: Shapes\S3Location|null,
     *     BuildConfiguration?: Shapes\BuildConfiguration|null,
     *     AutoCreateApplication?: bool|null,
     *     Process?: bool|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
