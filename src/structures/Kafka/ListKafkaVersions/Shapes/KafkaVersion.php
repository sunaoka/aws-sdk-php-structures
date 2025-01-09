<?php

namespace Sunaoka\Aws\Structures\Kafka\ListKafkaVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Version
 * @property 'ACTIVE'|'DEPRECATED' $Status
 */
class KafkaVersion extends Shape
{
    /**
     * @param array{
     *     Version?: string,
     *     Status?: 'ACTIVE'|'DEPRECATED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
