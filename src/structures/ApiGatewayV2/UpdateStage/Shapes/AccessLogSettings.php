<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\UpdateStage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationArn
 * @property string $Format
 */
class AccessLogSettings extends Shape
{
    /**
     * @param array{
     *     DestinationArn?: string,
     *     Format?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
