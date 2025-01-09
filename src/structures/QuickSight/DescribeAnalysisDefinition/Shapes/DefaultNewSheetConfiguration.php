<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DefaultInteractiveLayoutConfiguration $InteractiveLayoutConfiguration
 * @property DefaultPaginatedLayoutConfiguration $PaginatedLayoutConfiguration
 * @property 'PAGINATED'|'INTERACTIVE' $SheetContentType
 */
class DefaultNewSheetConfiguration extends Shape
{
    /**
     * @param array{
     *     InteractiveLayoutConfiguration?: DefaultInteractiveLayoutConfiguration,
     *     PaginatedLayoutConfiguration?: DefaultPaginatedLayoutConfiguration,
     *     SheetContentType?: 'PAGINATED'|'INTERACTIVE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
