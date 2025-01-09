<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateStack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string $SettingsGroup
 */
class ApplicationSettings extends Shape
{
    /**
     * @param array{
     *     Enabled: bool,
     *     SettingsGroup?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
