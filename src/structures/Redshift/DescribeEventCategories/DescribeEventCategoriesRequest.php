<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeEventCategories;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SourceType
 */
class DescribeEventCategoriesRequest extends Request
{
    /**
     * @param array{SourceType?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
