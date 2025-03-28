<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListResourceScans;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int|null $MaxResults
 * @property 'FULL'|'PARTIAL'|null $ScanTypeFilter
 */
class ListResourceScansRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int|null,
     *     ScanTypeFilter?: 'FULL'|'PARTIAL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
