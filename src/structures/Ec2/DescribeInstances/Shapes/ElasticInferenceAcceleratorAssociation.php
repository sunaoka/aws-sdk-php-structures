<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ElasticInferenceAcceleratorArn
 * @property string $ElasticInferenceAcceleratorAssociationId
 * @property string $ElasticInferenceAcceleratorAssociationState
 * @property \Aws\Api\DateTimeResult $ElasticInferenceAcceleratorAssociationTime
 */
class ElasticInferenceAcceleratorAssociation extends Shape
{
    /**
     * @param array{
     *     ElasticInferenceAcceleratorArn?: string,
     *     ElasticInferenceAcceleratorAssociationId?: string,
     *     ElasticInferenceAcceleratorAssociationState?: string,
     *     ElasticInferenceAcceleratorAssociationTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
