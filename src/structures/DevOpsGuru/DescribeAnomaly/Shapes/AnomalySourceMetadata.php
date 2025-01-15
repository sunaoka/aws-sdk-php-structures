<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeAnomaly\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Source
 * @property string|null $SourceResourceName
 * @property string|null $SourceResourceType
 */
class AnomalySourceMetadata extends Shape
{
    /**
     * @param array{
     *     Source?: string|null,
     *     SourceResourceName?: string|null,
     *     SourceResourceType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
