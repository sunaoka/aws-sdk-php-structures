<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RdsRequirements $RequirementsToTarget
 * @property RdsConfiguration $TargetConfiguration
 */
class RdsRecommendation extends Shape
{
    /**
     * @param array{
     *     RequirementsToTarget?: RdsRequirements,
     *     TargetConfiguration?: RdsConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
