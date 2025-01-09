<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeSuggesters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SuggesterName
 * @property DocumentSuggesterOptions $DocumentSuggesterOptions
 */
class Suggester extends Shape
{
    /**
     * @param array{
     *     SuggesterName: string,
     *     DocumentSuggesterOptions: DocumentSuggesterOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
