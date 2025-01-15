<?php

namespace Sunaoka\Aws\Structures\MTurk\ListQualificationRequests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $QualificationTypeId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListQualificationRequestsRequest extends Request
{
    /**
     * @param array{
     *     QualificationTypeId?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
