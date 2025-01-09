<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteLaunchTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $LaunchTemplateId
 * @property string $LaunchTemplateName
 */
class DeleteLaunchTemplateRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     LaunchTemplateId?: string,
     *     LaunchTemplateName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
