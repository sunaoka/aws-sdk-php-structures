<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteLaunchTemplateVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string|null $LaunchTemplateId
 * @property string|null $LaunchTemplateName
 * @property list<string> $Versions
 */
class DeleteLaunchTemplateVersionsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     LaunchTemplateId?: string|null,
     *     LaunchTemplateName?: string|null,
     *     Versions: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
