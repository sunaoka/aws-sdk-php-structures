<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplateVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string|null $ClientToken
 * @property string|null $LaunchTemplateId
 * @property string|null $LaunchTemplateName
 * @property string|null $SourceVersion
 * @property string|null $VersionDescription
 * @property Shapes\RequestLaunchTemplateData $LaunchTemplateData
 * @property bool|null $ResolveAlias
 */
class CreateLaunchTemplateVersionRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     ClientToken?: string|null,
     *     LaunchTemplateId?: string|null,
     *     LaunchTemplateName?: string|null,
     *     SourceVersion?: string|null,
     *     VersionDescription?: string|null,
     *     LaunchTemplateData: Shapes\RequestLaunchTemplateData,
     *     ResolveAlias?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
