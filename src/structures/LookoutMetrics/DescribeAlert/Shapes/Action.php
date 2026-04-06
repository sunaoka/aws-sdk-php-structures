<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DescribeAlert\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SNSConfiguration|null $SNSConfiguration
 * @property LambdaConfiguration|null $LambdaConfiguration
 */
class Action extends Shape
{
    /**
     * @param array{
     *     SNSConfiguration?: SNSConfiguration|null,
     *     LambdaConfiguration?: LambdaConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
