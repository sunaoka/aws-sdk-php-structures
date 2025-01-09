<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CustomPlugin $customPlugin
 */
class Plugin extends Shape
{
    /**
     * @param array{customPlugin: CustomPlugin} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
