<?php

namespace Sunaoka\Aws\Structures\Comprehend\DetectEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Pages
 * @property list<ExtractedCharactersListItem> $ExtractedCharacters
 */
class DocumentMetadata extends Shape
{
    /**
     * @param array{
     *     Pages?: int,
     *     ExtractedCharacters?: list<ExtractedCharactersListItem>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
