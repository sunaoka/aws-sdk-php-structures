<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateStage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $format
 * @property string $destinationArn
 */
class AccessLogSettings extends Shape
{
    /**
     * @param array{
     *     format?: string,
     *     destinationArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
