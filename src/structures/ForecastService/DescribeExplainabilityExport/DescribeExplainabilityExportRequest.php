<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeExplainabilityExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExplainabilityExportArn
 */
class DescribeExplainabilityExportRequest extends Request
{
    /**
     * @param array{ExplainabilityExportArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
