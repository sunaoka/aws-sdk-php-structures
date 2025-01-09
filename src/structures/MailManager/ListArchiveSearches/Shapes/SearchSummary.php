<?php

namespace Sunaoka\Aws\Structures\MailManager\ListArchiveSearches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SearchId
 * @property SearchStatus $Status
 */
class SearchSummary extends Shape
{
    /**
     * @param array{
     *     SearchId?: string,
     *     Status?: SearchStatus
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
