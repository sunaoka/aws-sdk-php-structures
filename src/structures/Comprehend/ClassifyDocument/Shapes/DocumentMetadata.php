<?php

namespace Sunaoka\Aws\Structures\Comprehend\ClassifyDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Pages
 * @property list<ExtractedCharactersListItem>|null $ExtractedCharacters
 */
class DocumentMetadata extends Shape
{
    /**
     * @param array{
     *     Pages?: int|null,
     *     ExtractedCharacters?: list<ExtractedCharactersListItem>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
