<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\CreatePlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $crossAccountRole
 * @property string|null $externalId
 * @property string $clusterArn
 */
class EksCluster extends Shape
{
    /**
     * @param array{
     *     crossAccountRole?: string|null,
     *     externalId?: string|null,
     *     clusterArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
