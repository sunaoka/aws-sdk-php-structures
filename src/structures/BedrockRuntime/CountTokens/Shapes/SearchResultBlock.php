<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\CountTokens\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $source
 * @property string $title
 * @property list<SearchResultContentBlock> $content
 * @property CitationsConfig|null $citations
 */
class SearchResultBlock extends Shape
{
    /**
     * @param array{
     *     source: string,
     *     title: string,
     *     content: list<SearchResultContentBlock>,
     *     citations?: CitationsConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
