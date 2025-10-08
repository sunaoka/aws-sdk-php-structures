<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetResourcesV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Other
 * @property int|null $Fatal
 * @property int|null $Critical
 * @property int|null $High
 * @property int|null $Medium
 * @property int|null $Low
 * @property int|null $Informational
 * @property int|null $Unknown
 */
class ResourceSeverityBreakdown extends Shape
{
    /**
     * @param array{
     *     Other?: int|null,
     *     Fatal?: int|null,
     *     Critical?: int|null,
     *     High?: int|null,
     *     Medium?: int|null,
     *     Low?: int|null,
     *     Informational?: int|null,
     *     Unknown?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
