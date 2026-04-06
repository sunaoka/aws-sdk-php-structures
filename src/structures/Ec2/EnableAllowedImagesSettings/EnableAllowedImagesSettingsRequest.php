<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableAllowedImagesSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'enabled'|'audit-mode' $AllowedImagesSettingsState
 * @property bool|null $DryRun
 */
class EnableAllowedImagesSettingsRequest extends Request
{
    /**
     * @param array{
     *     AllowedImagesSettingsState: 'enabled'|'audit-mode',
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
