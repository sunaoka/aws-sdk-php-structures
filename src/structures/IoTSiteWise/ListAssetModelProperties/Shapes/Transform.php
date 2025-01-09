<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssetModelProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $expression
 * @property list<ExpressionVariable> $variables
 * @property TransformProcessingConfig $processingConfig
 */
class Transform extends Shape
{
    /**
     * @param array{
     *     expression: string,
     *     variables: list<ExpressionVariable>,
     *     processingConfig?: TransformProcessingConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
