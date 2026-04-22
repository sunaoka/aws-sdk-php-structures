<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyManagedResourceVisibility;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property 'hidden'|'visible'|null $DefaultVisibility
 */
class ModifyManagedResourceVisibilityRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     DefaultVisibility?: 'hidden'|'visible'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
