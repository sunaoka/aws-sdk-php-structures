<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RdsRequirements|null $RequirementsToTarget
 * @property RdsConfiguration|null $TargetConfiguration
 */
class RdsRecommendation extends Shape
{
    /**
     * @param array{
     *     RequirementsToTarget?: RdsRequirements|null,
     *     TargetConfiguration?: RdsConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
