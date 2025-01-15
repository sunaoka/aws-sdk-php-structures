<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetStage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $format
 * @property string|null $destinationArn
 */
class AccessLogSettings extends Shape
{
    /**
     * @param array{
     *     format?: string|null,
     *     destinationArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
