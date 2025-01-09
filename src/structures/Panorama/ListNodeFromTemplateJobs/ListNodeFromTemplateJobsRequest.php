<?php

namespace Sunaoka\Aws\Structures\Panorama\ListNodeFromTemplateJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<0, 25> $MaxResults
 * @property string $NextToken
 */
class ListNodeFromTemplateJobsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<0, 25>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
