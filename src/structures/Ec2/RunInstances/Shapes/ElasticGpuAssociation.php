<?php

namespace Sunaoka\Aws\Structures\Ec2\RunInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ElasticGpuId
 * @property string|null $ElasticGpuAssociationId
 * @property string|null $ElasticGpuAssociationState
 * @property string|null $ElasticGpuAssociationTime
 */
class ElasticGpuAssociation extends Shape
{
    /**
     * @param array{
     *     ElasticGpuId?: string|null,
     *     ElasticGpuAssociationId?: string|null,
     *     ElasticGpuAssociationState?: string|null,
     *     ElasticGpuAssociationTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
