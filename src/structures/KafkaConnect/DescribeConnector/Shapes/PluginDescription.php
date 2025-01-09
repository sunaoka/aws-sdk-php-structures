<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomPluginDescription $customPlugin
 */
class PluginDescription extends Shape
{
    /**
     * @param array{customPlugin?: CustomPluginDescription} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
