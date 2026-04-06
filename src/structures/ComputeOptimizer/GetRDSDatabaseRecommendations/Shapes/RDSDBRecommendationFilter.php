<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRDSDatabaseRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'InstanceFinding'|'InstanceFindingReasonCode'|'StorageFinding'|'StorageFindingReasonCode'|'Idle'|null $name
 * @property list<string>|null $values
 */
class RDSDBRecommendationFilter extends Shape
{
    /**
     * @param array{
     *     name?: 'InstanceFinding'|'InstanceFindingReasonCode'|'StorageFinding'|'StorageFindingReasonCode'|'Idle'|null,
     *     values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
