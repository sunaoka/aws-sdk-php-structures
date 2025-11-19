<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $title
 * @property string|null $source
 * @property list<CitationSourceContentDelta>|null $sourceContent
 * @property CitationLocation|null $location
 */
class CitationsDelta extends Shape
{
    /**
     * @param array{
     *     title?: string|null,
     *     source?: string|null,
     *     sourceContent?: list<CitationSourceContentDelta>|null,
     *     location?: CitationLocation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
