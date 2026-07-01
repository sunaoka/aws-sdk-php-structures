<?php

namespace Sunaoka\Aws\Structures\Artifact\ListComplianceInquiryQueries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $complianceInquiryId
 * @property int<1, 300>|null $maxResults
 * @property string|null $nextToken
 */
class ListComplianceInquiryQueriesRequest extends Request
{
    /**
     * @param array{
     *     complianceInquiryId: string,
     *     maxResults?: int<1, 300>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
