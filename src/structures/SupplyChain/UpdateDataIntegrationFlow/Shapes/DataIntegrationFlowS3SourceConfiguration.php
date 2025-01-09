<?php

namespace Sunaoka\Aws\Structures\SupplyChain\UpdateDataIntegrationFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketName
 * @property string $prefix
 * @property DataIntegrationFlowS3Options $options
 */
class DataIntegrationFlowS3SourceConfiguration extends Shape
{
    /**
     * @param array{
     *     bucketName: string,
     *     prefix: string,
     *     options?: DataIntegrationFlowS3Options
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
