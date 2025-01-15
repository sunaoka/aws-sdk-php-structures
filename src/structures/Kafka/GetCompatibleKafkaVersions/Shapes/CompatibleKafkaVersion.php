<?php

namespace Sunaoka\Aws\Structures\Kafka\GetCompatibleKafkaVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceVersion
 * @property list<string>|null $TargetVersions
 */
class CompatibleKafkaVersion extends Shape
{
    /**
     * @param array{
     *     SourceVersion?: string|null,
     *     TargetVersions?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
