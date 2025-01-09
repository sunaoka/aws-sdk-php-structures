<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DefineSuggester\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceField
 * @property 'none'|'low'|'high' $FuzzyMatching
 * @property string $SortExpression
 */
class DocumentSuggesterOptions extends Shape
{
    /**
     * @param array{
     *     SourceField: string,
     *     FuzzyMatching?: 'none'|'low'|'high',
     *     SortExpression?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
