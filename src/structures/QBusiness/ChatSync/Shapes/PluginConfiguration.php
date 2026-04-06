<?php

namespace Sunaoka\Aws\Structures\QBusiness\ChatSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $pluginId
 */
class PluginConfiguration extends Shape
{
    /**
     * @param array{pluginId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
