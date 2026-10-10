<?php

namespace Sunaoka\Aws\Structures\MediaTailor\PutFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $TtlMinimumSeconds
 * @property int<1, max> $TtlMaximumSeconds
 * @property string|null $Key
 */
class HttpRequestCacheConfiguration extends Shape
{
    /**
     * @param array{
     *     TtlMinimumSeconds: int<1, max>,
     *     TtlMaximumSeconds: int<1, max>,
     *     Key?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
