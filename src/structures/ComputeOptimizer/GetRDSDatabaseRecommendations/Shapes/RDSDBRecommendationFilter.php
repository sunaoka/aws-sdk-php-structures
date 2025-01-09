<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRDSDatabaseRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'InstanceFinding'|'InstanceFindingReasonCode'|'StorageFinding'|'StorageFindingReasonCode'|'Idle' $name
 * @property list<string> $values
 */
class RDSDBRecommendationFilter extends Shape
{
    /**
     * @param array{
     *     name?: 'InstanceFinding'|'InstanceFindingReasonCode'|'StorageFinding'|'StorageFindingReasonCode'|'Idle',
     *     values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
