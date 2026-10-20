<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeServerlessCaches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Status
 * @property Endpoint|null $MigrationEndpoint
 * @property string|null $CutoverMode
 */
class MigrationSummary extends Shape
{
    /**
     * @param array{
     *     Status?: string|null,
     *     MigrationEndpoint?: Endpoint|null,
     *     CutoverMode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
