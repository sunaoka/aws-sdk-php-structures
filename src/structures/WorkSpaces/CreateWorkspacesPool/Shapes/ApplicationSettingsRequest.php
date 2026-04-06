<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateWorkspacesPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'ENABLED' $Status
 * @property string|null $SettingsGroup
 */
class ApplicationSettingsRequest extends Shape
{
    /**
     * @param array{
     *     Status: 'DISABLED'|'ENABLED',
     *     SettingsGroup?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
