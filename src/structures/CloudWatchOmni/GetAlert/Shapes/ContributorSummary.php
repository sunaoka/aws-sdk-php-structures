<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetAlert\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $warningCount
 * @property int|null $criticalCount
 */
class ContributorSummary extends Shape
{
    /**
     * @param array{
     *     warningCount?: int|null,
     *     criticalCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
