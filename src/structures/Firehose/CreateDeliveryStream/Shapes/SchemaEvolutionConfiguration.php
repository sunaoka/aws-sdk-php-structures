<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 */
class SchemaEvolutionConfiguration extends Shape
{
    /**
     * @param array{Enabled: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
