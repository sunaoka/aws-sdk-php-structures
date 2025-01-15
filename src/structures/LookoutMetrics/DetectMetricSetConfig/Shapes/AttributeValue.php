<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DetectMetricSetConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $S
 * @property string|null $N
 * @property string|null $B
 * @property list<string>|null $SS
 * @property list<string>|null $NS
 * @property list<string>|null $BS
 */
class AttributeValue extends Shape
{
    /**
     * @param array{
     *     S?: string|null,
     *     N?: string|null,
     *     B?: string|null,
     *     SS?: list<string>|null,
     *     NS?: list<string>|null,
     *     BS?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
