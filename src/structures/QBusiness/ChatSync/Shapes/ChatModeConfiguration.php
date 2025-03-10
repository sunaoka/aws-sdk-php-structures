<?php

namespace Sunaoka\Aws\Structures\QBusiness\ChatSync\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PluginConfiguration|null $pluginConfiguration
 */
class ChatModeConfiguration extends Shape
{
    /**
     * @param array{pluginConfiguration?: PluginConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
