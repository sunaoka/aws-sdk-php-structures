<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\UpdateWorkspacesPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'ENABLED' $Status
 * @property string $SettingsGroup
 */
class ApplicationSettingsRequest extends Shape
{
    /**
     * @param array{
     *     Status: 'DISABLED'|'ENABLED',
     *     SettingsGroup?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
