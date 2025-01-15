<?php

namespace Sunaoka\Aws\Structures\FIS\ListTargetResourceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $resourceType
 * @property string|null $description
 */
class TargetResourceTypeSummary extends Shape
{
    /**
     * @param array{
     *     resourceType?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
