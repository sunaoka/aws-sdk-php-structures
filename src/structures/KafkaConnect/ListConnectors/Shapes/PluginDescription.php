<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomPluginDescription|null $customPlugin
 */
class PluginDescription extends Shape
{
    /**
     * @param array{customPlugin?: CustomPluginDescription|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
