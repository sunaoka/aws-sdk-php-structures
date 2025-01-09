<?php

namespace Sunaoka\Aws\Structures\Ec2\RunInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ElasticGpuId
 * @property string $ElasticGpuAssociationId
 * @property string $ElasticGpuAssociationState
 * @property string $ElasticGpuAssociationTime
 */
class ElasticGpuAssociation extends Shape
{
    /**
     * @param array{
     *     ElasticGpuId?: string,
     *     ElasticGpuAssociationId?: string,
     *     ElasticGpuAssociationState?: string,
     *     ElasticGpuAssociationTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
