<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateClusterKafkaVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property int $Revision
 */
class ConfigurationInfo extends Shape
{
    /**
     * @param array{
     *     Arn: string,
     *     Revision: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
