<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DetectMetricSetConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S
 * @property string $N
 * @property string $B
 * @property list<string> $SS
 * @property list<string> $NS
 * @property list<string> $BS
 */
class AttributeValue extends Shape
{
    /**
     * @param array{
     *     S?: string,
     *     N?: string,
     *     B?: string,
     *     SS?: list<string>,
     *     NS?: list<string>,
     *     BS?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
