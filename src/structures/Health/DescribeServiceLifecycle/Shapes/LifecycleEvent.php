<?php

namespace Sunaoka\Aws\Structures\Health\DescribeServiceLifecycle\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $lifecycleEventType
 * @property \Aws\Api\DateTimeResult|null $date
 * @property list<string>|null $regions
 * @property list<string>|null $impactRisks
 * @property string|null $description
 */
class LifecycleEvent extends Shape
{
    /**
     * @param array{
     *     lifecycleEventType?: string|null,
     *     date?: \Aws\Api\DateTimeResult|null,
     *     regions?: list<string>|null,
     *     impactRisks?: list<string>|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
