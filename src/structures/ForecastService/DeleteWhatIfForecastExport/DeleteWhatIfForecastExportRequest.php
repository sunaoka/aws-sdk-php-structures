<?php

namespace Sunaoka\Aws\Structures\ForecastService\DeleteWhatIfForecastExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WhatIfForecastExportArn
 */
class DeleteWhatIfForecastExportRequest extends Request
{
    /**
     * @param array{WhatIfForecastExportArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
