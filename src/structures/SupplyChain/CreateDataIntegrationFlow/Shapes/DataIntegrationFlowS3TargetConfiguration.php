<?php

namespace Sunaoka\Aws\Structures\SupplyChain\CreateDataIntegrationFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketName
 * @property string $prefix
 * @property DataIntegrationFlowS3Options|null $options
 */
class DataIntegrationFlowS3TargetConfiguration extends Shape
{
    /**
     * @param array{
     *     bucketName: string,
     *     prefix: string,
     *     options?: DataIntegrationFlowS3Options|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
