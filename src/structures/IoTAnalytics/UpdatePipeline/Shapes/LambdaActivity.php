<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\UpdatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $lambdaName
 * @property int<1, 1000> $batchSize
 * @property string|null $next
 */
class LambdaActivity extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     lambdaName: string,
     *     batchSize: int<1, 1000>,
     *     next?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
