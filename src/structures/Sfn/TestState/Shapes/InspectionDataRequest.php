<?php

namespace Sunaoka\Aws\Structures\Sfn\TestState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $protocol
 * @property string $method
 * @property string $url
 * @property string $headers
 * @property string $body
 */
class InspectionDataRequest extends Shape
{
    /**
     * @param array{
     *     protocol?: string,
     *     method?: string,
     *     url?: string,
     *     headers?: string,
     *     body?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
