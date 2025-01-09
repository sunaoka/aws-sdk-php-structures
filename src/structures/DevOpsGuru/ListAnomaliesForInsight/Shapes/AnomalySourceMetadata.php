<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListAnomaliesForInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Source
 * @property string $SourceResourceName
 * @property string $SourceResourceType
 */
class AnomalySourceMetadata extends Shape
{
    /**
     * @param array{
     *     Source?: string,
     *     SourceResourceName?: string,
     *     SourceResourceType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
