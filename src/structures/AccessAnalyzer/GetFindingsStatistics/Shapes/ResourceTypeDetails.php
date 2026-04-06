<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetFindingsStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $totalActivePublic
 * @property int|null $totalActiveCrossAccount
 * @property int|null $totalActiveErrors
 */
class ResourceTypeDetails extends Shape
{
    /**
     * @param array{
     *     totalActivePublic?: int|null,
     *     totalActiveCrossAccount?: int|null,
     *     totalActiveErrors?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
