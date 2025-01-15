<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ImportJobResponse> $Item
 * @property string|null $NextToken
 */
class ImportJobsResponse extends Shape
{
    /**
     * @param array{
     *     Item: list<ImportJobResponse>,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
