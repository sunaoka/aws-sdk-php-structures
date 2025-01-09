<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolFunctionInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $cluster
 * @property string $helmChart
 * @property string $nodeGroup
 */
class GetSolVnfcResourceInfoMetadata extends Shape
{
    /**
     * @param array{
     *     cluster?: string,
     *     helmChart?: string,
     *     nodeGroup?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
