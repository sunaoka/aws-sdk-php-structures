<?php

namespace Sunaoka\Aws\Structures\ElasticInference\DescribeAccelerators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ElasticInferenceAcceleratorHealth|null $acceleratorHealth
 * @property string|null $acceleratorType
 * @property string|null $acceleratorId
 * @property string|null $availabilityZone
 * @property string|null $attachedResource
 */
class ElasticInferenceAccelerator extends Shape
{
    /**
     * @param array{
     *     acceleratorHealth?: ElasticInferenceAcceleratorHealth|null,
     *     acceleratorType?: string|null,
     *     acceleratorId?: string|null,
     *     availabilityZone?: string|null,
     *     attachedResource?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
