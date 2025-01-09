<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListDocumentClassificationJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DocumentClassificationJobFilter $Filter
 * @property string $NextToken
 * @property int<1, 500> $MaxResults
 */
class ListDocumentClassificationJobsRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\DocumentClassificationJobFilter,
     *     NextToken?: string,
     *     MaxResults?: int<1, 500>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
