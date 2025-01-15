<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateStack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string|null $SettingsGroup
 */
class ApplicationSettings extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     SettingsGroup?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
