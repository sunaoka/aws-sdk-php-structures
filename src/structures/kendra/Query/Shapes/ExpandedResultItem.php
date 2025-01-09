<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $DocumentId
 * @property TextWithHighlights $DocumentTitle
 * @property TextWithHighlights $DocumentExcerpt
 * @property string $DocumentURI
 * @property list<DocumentAttribute> $DocumentAttributes
 */
class ExpandedResultItem extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     DocumentId?: string,
     *     DocumentTitle?: TextWithHighlights,
     *     DocumentExcerpt?: TextWithHighlights,
     *     DocumentURI?: string,
     *     DocumentAttributes?: list<DocumentAttribute>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
