<?php

namespace Sunaoka\Aws\Structures\ApplicationCostProfiler\GetReportDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $reportId
 */
class GetReportDefinitionRequest extends Request
{
    /**
     * @param array{reportId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
