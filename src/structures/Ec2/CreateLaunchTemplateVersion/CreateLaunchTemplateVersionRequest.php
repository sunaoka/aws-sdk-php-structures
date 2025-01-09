<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplateVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $ClientToken
 * @property string $LaunchTemplateId
 * @property string $LaunchTemplateName
 * @property string $SourceVersion
 * @property string $VersionDescription
 * @property Shapes\RequestLaunchTemplateData $LaunchTemplateData
 * @property bool $ResolveAlias
 */
class CreateLaunchTemplateVersionRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     ClientToken?: string,
     *     LaunchTemplateId?: string,
     *     LaunchTemplateName?: string,
     *     SourceVersion?: string,
     *     VersionDescription?: string,
     *     LaunchTemplateData: Shapes\RequestLaunchTemplateData,
     *     ResolveAlias?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
