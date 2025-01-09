<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEndpointConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationS3Uri
 * @property string $KmsKeyId
 */
class ProductionVariantCoreDumpConfig extends Shape
{
    /**
     * @param array{
     *     DestinationS3Uri: string,
     *     KmsKeyId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
