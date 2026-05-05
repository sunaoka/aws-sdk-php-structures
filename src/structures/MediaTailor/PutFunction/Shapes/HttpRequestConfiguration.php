<?php

namespace Sunaoka\Aws\Structures\MediaTailor\PutFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JSONATA' $Runtime
 * @property array<string, string>|null $Output
 * @property 'GET'|'POST' $MethodType
 * @property int $RequestTimeoutMilliseconds
 * @property string $Url
 * @property string|null $Body
 * @property array<string, string>|null $Headers
 */
class HttpRequestConfiguration extends Shape
{
    /**
     * @param array{
     *     Runtime: 'JSONATA',
     *     Output?: array<string, string>|null,
     *     MethodType: 'GET'|'POST',
     *     RequestTimeoutMilliseconds: int,
     *     Url: string,
     *     Body?: string|null,
     *     Headers?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
