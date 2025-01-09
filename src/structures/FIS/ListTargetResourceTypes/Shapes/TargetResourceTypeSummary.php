<?php

namespace Sunaoka\Aws\Structures\FIS\ListTargetResourceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $resourceType
 * @property string $description
 */
class TargetResourceTypeSummary extends Shape
{
    /**
     * @param array{
     *     resourceType?: string,
     *     description?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
