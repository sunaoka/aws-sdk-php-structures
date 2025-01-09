<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ListAvailableManagementCidrRanges;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ManagementCidrRangeConstraint
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListAvailableManagementCidrRangesRequest extends Request
{
    /**
     * @param array{
     *     ManagementCidrRangeConstraint: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
