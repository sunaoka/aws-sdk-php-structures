<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyLaunchTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $ClientToken
 * @property string $LaunchTemplateId
 * @property string $LaunchTemplateName
 * @property string $DefaultVersion
 */
class ModifyLaunchTemplateRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     ClientToken?: string,
     *     LaunchTemplateId?: string,
     *     LaunchTemplateName?: string,
     *     DefaultVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
