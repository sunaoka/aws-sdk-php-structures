<?php

namespace Sunaoka\Aws\Structures\ApplicationDiscoveryService\StartExportTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Ec2RecommendationsExportPreferences|null $ec2RecommendationsPreferences
 */
class ExportPreferences extends Shape
{
    /**
     * @param array{ec2RecommendationsPreferences?: Ec2RecommendationsExportPreferences|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
