<?php

namespace Sunaoka\Aws\Structures\DocDB\DescribeEventCategories;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SourceType
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribeEventCategoriesRequest extends Request
{
    /**
     * @param array{
     *     SourceType?: string|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
