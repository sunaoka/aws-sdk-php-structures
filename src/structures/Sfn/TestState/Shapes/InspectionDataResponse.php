<?php

namespace Sunaoka\Aws\Structures\Sfn\TestState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $protocol
 * @property string $statusCode
 * @property string $statusMessage
 * @property string $headers
 * @property string $body
 */
class InspectionDataResponse extends Shape
{
    /**
     * @param array{
     *     protocol?: string,
     *     statusCode?: string,
     *     statusMessage?: string,
     *     headers?: string,
     *     body?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
