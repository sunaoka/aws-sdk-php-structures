<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\CountTokens\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $title
 * @property list<CitationSourceContent>|null $sourceContent
 * @property CitationLocation|null $location
 */
class Citation extends Shape
{
    /**
     * @param array{
     *     title?: string|null,
     *     sourceContent?: list<CitationSourceContent>|null,
     *     location?: CitationLocation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
