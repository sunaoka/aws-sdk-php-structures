<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $DocumentId
 * @property TextWithHighlights|null $DocumentTitle
 * @property TextWithHighlights|null $DocumentExcerpt
 * @property string|null $DocumentURI
 * @property list<DocumentAttribute>|null $DocumentAttributes
 */
class ExpandedResultItem extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     DocumentId?: string|null,
     *     DocumentTitle?: TextWithHighlights|null,
     *     DocumentExcerpt?: TextWithHighlights|null,
     *     DocumentURI?: string|null,
     *     DocumentAttributes?: list<DocumentAttribute>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
