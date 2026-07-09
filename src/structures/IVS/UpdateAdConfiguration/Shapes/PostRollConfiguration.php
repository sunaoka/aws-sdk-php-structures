<?php

namespace Sunaoka\Aws\Structures\IVS\UpdateAdConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 300> $durationSeconds
 * @property bool $enabled
 */
class PostRollConfiguration extends Shape
{
    /**
     * @param array{
     *     durationSeconds: int<1, 300>,
     *     enabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
