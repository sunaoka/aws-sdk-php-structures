<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DeleteSuggester\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceField
 * @property 'none'|'low'|'high'|null $FuzzyMatching
 * @property string|null $SortExpression
 */
class DocumentSuggesterOptions extends Shape
{
    /**
     * @param array{
     *     SourceField: string,
     *     FuzzyMatching?: 'none'|'low'|'high'|null,
     *     SortExpression?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
