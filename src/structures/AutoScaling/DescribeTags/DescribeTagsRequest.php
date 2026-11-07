<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property bool|null $IncludeManagedResources
 * @property string|null $NextToken
 * @property int|null $MaxRecords
 */
class DescribeTagsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     IncludeManagedResources?: bool|null,
     *     NextToken?: string|null,
     *     MaxRecords?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
