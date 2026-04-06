<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateChannelNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dataSourceName
 * @property LambdaConfig|null $lambdaConfig
 */
class Integration extends Shape
{
    /**
     * @param array{
     *     dataSourceName: string,
     *     lambdaConfig?: LambdaConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
