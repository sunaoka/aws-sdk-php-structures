<?php

namespace Sunaoka\Aws\Structures\Kafka\ListKafkaVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Version
 * @property 'ACTIVE'|'DEPRECATED'|null $Status
 */
class KafkaVersion extends Shape
{
    /**
     * @param array{
     *     Version?: string|null,
     *     Status?: 'ACTIVE'|'DEPRECATED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
