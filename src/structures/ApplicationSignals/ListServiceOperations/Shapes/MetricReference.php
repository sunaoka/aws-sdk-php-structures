<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListServiceOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Namespace
 * @property string $MetricType
 * @property list<Dimension>|null $Dimensions
 * @property string $MetricName
 * @property string|null $AccountId
 */
class MetricReference extends Shape
{
    /**
     * @param array{
     *     Namespace: string,
     *     MetricType: string,
     *     Dimensions?: list<Dimension>|null,
     *     MetricName: string,
     *     AccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
