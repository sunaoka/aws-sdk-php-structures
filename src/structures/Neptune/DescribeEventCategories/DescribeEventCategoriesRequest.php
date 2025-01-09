<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeEventCategories;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceType
 * @property list<Shapes\Filter> $Filters
 */
class DescribeEventCategoriesRequest extends Request
{
    /**
     * @param array{
     *     SourceType?: string,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
