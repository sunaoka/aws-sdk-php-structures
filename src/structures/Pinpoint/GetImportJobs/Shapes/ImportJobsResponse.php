<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ImportJobResponse> $Item
 * @property string $NextToken
 */
class ImportJobsResponse extends Shape
{
    /**
     * @param array{
     *     Item: list<ImportJobResponse>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
