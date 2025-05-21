<?php

namespace Sunaoka\Aws\Structures\SupplyChain\ListDataIntegrationFlowExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketName
 * @property string $key
 */
class DataIntegrationFlowS3Source extends Shape
{
    /**
     * @param array{
     *     bucketName: string,
     *     key: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
