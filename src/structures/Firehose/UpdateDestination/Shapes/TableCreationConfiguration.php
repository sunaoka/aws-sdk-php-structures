<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 */
class TableCreationConfiguration extends Shape
{
    /**
     * @param array{Enabled: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
