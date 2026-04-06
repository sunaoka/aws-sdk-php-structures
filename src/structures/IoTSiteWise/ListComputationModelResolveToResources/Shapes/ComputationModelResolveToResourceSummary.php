<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListComputationModelResolveToResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResolveTo|null $resolveTo
 */
class ComputationModelResolveToResourceSummary extends Shape
{
    /**
     * @param array{resolveTo?: ResolveTo|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
