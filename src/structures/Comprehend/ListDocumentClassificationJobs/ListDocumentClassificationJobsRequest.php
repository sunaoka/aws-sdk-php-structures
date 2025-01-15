<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListDocumentClassificationJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DocumentClassificationJobFilter|null $Filter
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 */
class ListDocumentClassificationJobsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\DocumentClassificationJobFilter|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
