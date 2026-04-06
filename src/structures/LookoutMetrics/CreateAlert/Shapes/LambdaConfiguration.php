<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\CreateAlert\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleArn
 * @property string $LambdaArn
 */
class LambdaConfiguration extends Shape
{
    /**
     * @param array{
     *     RoleArn: string,
     *     LambdaArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
