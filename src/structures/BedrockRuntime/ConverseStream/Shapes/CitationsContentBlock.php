<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CitationGeneratedContent>|null $content
 * @property list<Citation>|null $citations
 */
class CitationsContentBlock extends Shape
{
    /**
     * @param array{
     *     content?: list<CitationGeneratedContent>|null,
     *     citations?: list<Citation>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
