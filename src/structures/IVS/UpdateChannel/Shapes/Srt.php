<?php

namespace Sunaoka\Aws\Structures\IVS\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $endpoint
 * @property string $passphrase
 */
class Srt extends Shape
{
    /**
     * @param array{
     *     endpoint?: string,
     *     passphrase?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
