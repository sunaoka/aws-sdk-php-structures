<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\ListCustomPlugins\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fileMd5
 * @property int $fileSize
 */
class CustomPluginFileDescription extends Shape
{
    /**
     * @param array{
     *     fileMd5?: string,
     *     fileSize?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
