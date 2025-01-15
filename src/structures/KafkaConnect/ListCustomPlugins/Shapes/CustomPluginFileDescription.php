<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListCustomPlugins\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $fileMd5
 * @property int|null $fileSize
 */
class CustomPluginFileDescription extends Shape
{
    /**
     * @param array{
     *     fileMd5?: string|null,
     *     fileSize?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
