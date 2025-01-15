<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolFunctionInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $cluster
 * @property string|null $helmChart
 * @property string|null $nodeGroup
 */
class GetSolVnfcResourceInfoMetadata extends Shape
{
    /**
     * @param array{
     *     cluster?: string|null,
     *     helmChart?: string|null,
     *     nodeGroup?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
