<?php

namespace Sunaoka\Aws\Structures\MailManager\ListArchiveSearches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SearchId
 * @property SearchStatus|null $Status
 */
class SearchSummary extends Shape
{
    /**
     * @param array{
     *     SearchId?: string|null,
     *     Status?: SearchStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
