<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetProperty\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $expression
 * @property list<ExpressionVariable> $variables
 * @property TransformProcessingConfig|null $processingConfig
 */
class Transform extends Shape
{
    /**
     * @param array{
     *     expression: string,
     *     variables: list<ExpressionVariable>,
     *     processingConfig?: TransformProcessingConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
