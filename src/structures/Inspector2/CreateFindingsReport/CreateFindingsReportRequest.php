<?php

namespace Sunaoka\Aws\Structures\Inspector2\CreateFindingsReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\FilterCriteria $filterCriteria
 * @property 'CSV'|'JSON' $reportFormat
 * @property Shapes\Destination $s3Destination
 */
class CreateFindingsReportRequest extends Request
{
    /**
     * @param array{
     *     filterCriteria?: Shapes\FilterCriteria,
     *     reportFormat: 'CSV'|'JSON',
     *     s3Destination: Shapes\Destination
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
