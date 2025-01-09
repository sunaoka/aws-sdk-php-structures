<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeWhatIfForecastExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WhatIfForecastExportArn
 */
class DescribeWhatIfForecastExportRequest extends Request
{
    /**
     * @param array{WhatIfForecastExportArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
