<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\TestTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $source
 * @property string $from
 * @property string $to
 */
class SubstituteStringEntry extends Shape
{
    /**
     * @param array{
     *     source: string,
     *     from: string,
     *     to: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
