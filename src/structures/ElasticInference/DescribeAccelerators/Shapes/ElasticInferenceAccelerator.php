<?php

namespace Sunaoka\Aws\Structures\ElasticInference\DescribeAccelerators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ElasticInferenceAcceleratorHealth $acceleratorHealth
 * @property string $acceleratorType
 * @property string $acceleratorId
 * @property string $availabilityZone
 * @property string $attachedResource
 */
class ElasticInferenceAccelerator extends Shape
{
    /**
     * @param array{
     *     acceleratorHealth?: ElasticInferenceAcceleratorHealth,
     *     acceleratorType?: string,
     *     acceleratorId?: string,
     *     availabilityZone?: string,
     *     attachedResource?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
