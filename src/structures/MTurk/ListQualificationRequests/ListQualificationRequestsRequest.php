<?php

namespace Sunaoka\Aws\Structures\MTurk\ListQualificationRequests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QualificationTypeId
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListQualificationRequestsRequest extends Request
{
    /**
     * @param array{
     *     QualificationTypeId?: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
