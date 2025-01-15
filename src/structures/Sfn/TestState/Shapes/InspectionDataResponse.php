<?php

namespace Sunaoka\Aws\Structures\Sfn\TestState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $protocol
 * @property string|null $statusCode
 * @property string|null $statusMessage
 * @property string|null $headers
 * @property string|null $body
 */
class InspectionDataResponse extends Shape
{
    /**
     * @param array{
     *     protocol?: string|null,
     *     statusCode?: string|null,
     *     statusMessage?: string|null,
     *     headers?: string|null,
     *     body?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
