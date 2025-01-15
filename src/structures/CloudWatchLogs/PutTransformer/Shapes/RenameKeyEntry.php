<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property string $renameTo
 * @property bool|null $overwriteIfExists
 */
class RenameKeyEntry extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     renameTo: string,
     *     overwriteIfExists?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
