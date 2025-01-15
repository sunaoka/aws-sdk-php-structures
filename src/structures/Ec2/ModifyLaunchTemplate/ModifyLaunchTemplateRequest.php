<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyLaunchTemplate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string|null $ClientToken
 * @property string|null $LaunchTemplateId
 * @property string|null $LaunchTemplateName
 * @property string|null $DefaultVersion
 */
class ModifyLaunchTemplateRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     ClientToken?: string|null,
     *     LaunchTemplateId?: string|null,
     *     LaunchTemplateName?: string|null,
     *     DefaultVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
