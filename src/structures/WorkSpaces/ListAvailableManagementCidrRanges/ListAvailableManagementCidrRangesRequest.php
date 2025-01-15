<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ListAvailableManagementCidrRanges;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ManagementCidrRangeConstraint
 * @property int<1, 5>|null $MaxResults
 * @property string|null $NextToken
 */
class ListAvailableManagementCidrRangesRequest extends Request
{
    /**
     * @param array{
     *     ManagementCidrRangeConstraint: string,
     *     MaxResults?: int<1, 5>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
