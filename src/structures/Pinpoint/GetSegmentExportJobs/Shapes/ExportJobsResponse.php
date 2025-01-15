<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetSegmentExportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ExportJobResponse> $Item
 * @property string|null $NextToken
 */
class ExportJobsResponse extends Shape
{
    /**
     * @param array{
     *     Item: list<ExportJobResponse>,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
