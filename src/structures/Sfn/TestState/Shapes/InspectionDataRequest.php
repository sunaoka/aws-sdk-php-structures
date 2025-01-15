<?php

namespace Sunaoka\Aws\Structures\Sfn\TestState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $protocol
 * @property string|null $method
 * @property string|null $url
 * @property string|null $headers
 * @property string|null $body
 */
class InspectionDataRequest extends Shape
{
    /**
     * @param array{
     *     protocol?: string|null,
     *     method?: string|null,
     *     url?: string|null,
     *     headers?: string|null,
     *     body?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
