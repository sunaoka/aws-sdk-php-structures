<?php

namespace Sunaoka\Aws\Structures\Ssm\ListAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Status
 * @property string|null $DetailedStatus
 * @property array<string, int>|null $AssociationStatusAggregatedCount
 */
class AssociationOverview extends Shape
{
    /**
     * @param array{
     *     Status?: string|null,
     *     DetailedStatus?: string|null,
     *     AssociationStatusAggregatedCount?: array<string, int>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
