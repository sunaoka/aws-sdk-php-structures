<?php

namespace Sunaoka\Aws\Structures\ivschat\CreateLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $deliveryStreamName
 */
class FirehoseDestinationConfiguration extends Shape
{
    /**
     * @param array{deliveryStreamName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
