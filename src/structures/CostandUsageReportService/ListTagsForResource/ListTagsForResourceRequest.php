<?php

namespace Sunaoka\Aws\Structures\CostandUsageReportService\ListTagsForResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReportName
 */
class ListTagsForResourceRequest extends Request
{
    /**
     * @param array{ReportName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
