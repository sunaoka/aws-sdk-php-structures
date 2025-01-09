<?php

namespace Sunaoka\Aws\Structures\ApplicationCostProfiler\DeleteReportDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $reportId
 */
class DeleteReportDefinitionRequest extends Request
{
    /**
     * @param array{reportId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
