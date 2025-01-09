<?php

namespace Sunaoka\Aws\Structures\Support\DescribeTrustedAdvisorCheckResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $resourcesProcessed
 * @property int $resourcesFlagged
 * @property int $resourcesIgnored
 * @property int $resourcesSuppressed
 */
class TrustedAdvisorResourcesSummary extends Shape
{
    /**
     * @param array{
     *     resourcesProcessed: int,
     *     resourcesFlagged: int,
     *     resourcesIgnored: int,
     *     resourcesSuppressed: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
