<?php

namespace Sunaoka\Aws\Structures\CloudFront\DescribeFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $Status
 * @property FunctionConfig $FunctionConfig
 * @property FunctionMetadata $FunctionMetadata
 */
class FunctionSummary extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Status?: string|null,
     *     FunctionConfig: FunctionConfig,
     *     FunctionMetadata: FunctionMetadata
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
