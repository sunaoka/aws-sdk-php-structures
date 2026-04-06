<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServiceOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<MetricReference> $MetricReferences
 */
class ServiceOperation extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     MetricReferences: list<MetricReference>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
