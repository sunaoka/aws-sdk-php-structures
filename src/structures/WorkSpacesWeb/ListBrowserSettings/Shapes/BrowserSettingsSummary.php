<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\ListBrowserSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $browserSettingsArn
 */
class BrowserSettingsSummary extends Shape
{
    /**
     * @param array{browserSettingsArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
