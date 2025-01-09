<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteLaunchTemplateVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $LaunchTemplateId
 * @property string $LaunchTemplateName
 * @property list<string> $Versions
 */
class DeleteLaunchTemplateVersionsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     LaunchTemplateId?: string,
     *     LaunchTemplateName?: string,
     *     Versions: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
