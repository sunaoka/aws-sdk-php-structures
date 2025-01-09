<?php

namespace Sunaoka\Aws\Structures\AppSync\GetDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $lambdaFunctionArn
 */
class LambdaDataSourceConfig extends Shape
{
    /**
     * @param array{lambdaFunctionArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
