<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysisSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 */
class GetLendingAnalysisSummaryRequest extends Request
{
    /**
     * @param array{JobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
