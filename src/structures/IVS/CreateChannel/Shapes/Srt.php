<?php

namespace Sunaoka\Aws\Structures\IVS\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $endpoint
 * @property string|null $passphrase
 */
class Srt extends Shape
{
    /**
     * @param array{
     *     endpoint?: string|null,
     *     passphrase?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
