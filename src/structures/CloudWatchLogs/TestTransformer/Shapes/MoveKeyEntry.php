<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\TestTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $source
 * @property string $target
 * @property bool|null $overwriteIfExists
 */
class MoveKeyEntry extends Shape
{
    /**
     * @param array{
     *     source: string,
     *     target: string,
     *     overwriteIfExists?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
