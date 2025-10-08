<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $documentIndex
 * @property int<0, max>|null $start
 * @property int<0, max>|null $end
 */
class DocumentCharLocation extends Shape
{
    /**
     * @param array{
     *     documentIndex?: int<0, max>|null,
     *     start?: int<0, max>|null,
     *     end?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
