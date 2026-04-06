<?php

namespace Sunaoka\Aws\Structures\MediaTailor\PutPlaybackConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GET'|'POST'|null $Method
 * @property string|null $Body
 * @property array<string, string>|null $Headers
 * @property 'NONE'|'GZIP'|null $CompressRequest
 */
class HttpRequest extends Shape
{
    /**
     * @param array{
     *     Method?: 'GET'|'POST'|null,
     *     Body?: string|null,
     *     Headers?: array<string, string>|null,
     *     CompressRequest?: 'NONE'|'GZIP'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
