<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetStages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DestinationArn
 * @property string|null $Format
 */
class AccessLogSettings extends Shape
{
    /**
     * @param array{
     *     DestinationArn?: string|null,
     *     Format?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
