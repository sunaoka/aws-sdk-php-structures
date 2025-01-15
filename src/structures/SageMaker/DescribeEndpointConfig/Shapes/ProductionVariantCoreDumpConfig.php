<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEndpointConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationS3Uri
 * @property string|null $KmsKeyId
 */
class ProductionVariantCoreDumpConfig extends Shape
{
    /**
     * @param array{
     *     DestinationS3Uri: string,
     *     KmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
