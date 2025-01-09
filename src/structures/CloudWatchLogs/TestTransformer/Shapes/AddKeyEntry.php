<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\TestTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property string $value
 * @property bool $overwriteIfExists
 */
class AddKeyEntry extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     value: string,
     *     overwriteIfExists?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
