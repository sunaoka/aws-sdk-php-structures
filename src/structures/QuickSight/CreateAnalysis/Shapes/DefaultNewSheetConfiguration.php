<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DefaultInteractiveLayoutConfiguration|null $InteractiveLayoutConfiguration
 * @property DefaultPaginatedLayoutConfiguration|null $PaginatedLayoutConfiguration
 * @property 'PAGINATED'|'INTERACTIVE'|null $SheetContentType
 */
class DefaultNewSheetConfiguration extends Shape
{
    /**
     * @param array{
     *     InteractiveLayoutConfiguration?: DefaultInteractiveLayoutConfiguration|null,
     *     PaginatedLayoutConfiguration?: DefaultPaginatedLayoutConfiguration|null,
     *     SheetContentType?: 'PAGINATED'|'INTERACTIVE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
