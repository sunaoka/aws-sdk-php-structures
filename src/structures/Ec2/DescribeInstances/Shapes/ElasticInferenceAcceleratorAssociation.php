<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ElasticInferenceAcceleratorArn
 * @property string|null $ElasticInferenceAcceleratorAssociationId
 * @property string|null $ElasticInferenceAcceleratorAssociationState
 * @property \Aws\Api\DateTimeResult|null $ElasticInferenceAcceleratorAssociationTime
 */
class ElasticInferenceAcceleratorAssociation extends Shape
{
    /**
     * @param array{
     *     ElasticInferenceAcceleratorArn?: string|null,
     *     ElasticInferenceAcceleratorAssociationId?: string|null,
     *     ElasticInferenceAcceleratorAssociationState?: string|null,
     *     ElasticInferenceAcceleratorAssociationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
