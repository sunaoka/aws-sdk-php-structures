<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $source
 * @property string $target
 * @property bool $overwriteIfExists
 */
class CopyValueEntry extends Shape
{
    /**
     * @param array{
     *     source: string,
     *     target: string,
     *     overwriteIfExists?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
