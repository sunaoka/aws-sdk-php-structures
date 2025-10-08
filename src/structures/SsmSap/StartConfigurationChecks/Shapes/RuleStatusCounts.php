<?php

namespace Sunaoka\Aws\Structures\SsmSap\StartConfigurationChecks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Failed
 * @property int|null $Warning
 * @property int|null $Info
 * @property int|null $Passed
 * @property int|null $Unknown
 */
class RuleStatusCounts extends Shape
{
    /**
     * @param array{
     *     Failed?: int|null,
     *     Warning?: int|null,
     *     Info?: int|null,
     *     Passed?: int|null,
     *     Unknown?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
