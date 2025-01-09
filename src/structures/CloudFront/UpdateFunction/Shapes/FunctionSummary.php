<?php

namespace Sunaoka\Aws\Structures\CloudFront\UpdateFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Status
 * @property FunctionConfig $FunctionConfig
 * @property FunctionMetadata $FunctionMetadata
 */
class FunctionSummary extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Status?: string,
     *     FunctionConfig: FunctionConfig,
     *     FunctionMetadata: FunctionMetadata
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
