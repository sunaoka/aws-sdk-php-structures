<?php

namespace Sunaoka\Aws\Structures\SesV2\GetConfigurationSetEventDestinations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TopicArn
 */
class SnsDestination extends Shape
{
    /**
     * @param array{TopicArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
