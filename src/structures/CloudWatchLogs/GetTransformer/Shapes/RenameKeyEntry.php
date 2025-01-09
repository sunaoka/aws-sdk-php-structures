<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property string $renameTo
 * @property bool $overwriteIfExists
 */
class RenameKeyEntry extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     renameTo: string,
     *     overwriteIfExists?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
