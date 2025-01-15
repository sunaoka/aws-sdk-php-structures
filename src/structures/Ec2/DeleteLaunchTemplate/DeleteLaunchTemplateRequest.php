<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteLaunchTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string|null $LaunchTemplateId
 * @property string|null $LaunchTemplateName
 */
class DeleteLaunchTemplateRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     LaunchTemplateId?: string|null,
     *     LaunchTemplateName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
