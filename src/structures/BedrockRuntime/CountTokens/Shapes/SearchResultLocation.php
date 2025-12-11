<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\CountTokens\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $searchResultIndex
 * @property int<0, max>|null $start
 * @property int<0, max>|null $end
 */
class SearchResultLocation extends Shape
{
    /**
     * @param array{
     *     searchResultIndex?: int<0, max>|null,
     *     start?: int<0, max>|null,
     *     end?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
