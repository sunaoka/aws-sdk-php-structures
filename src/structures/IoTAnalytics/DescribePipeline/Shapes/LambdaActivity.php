<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $lambdaName
 * @property int $batchSize
 * @property string $next
 */
class LambdaActivity extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     lambdaName: string,
     *     batchSize: int,
     *     next?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
