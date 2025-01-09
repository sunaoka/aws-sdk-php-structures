<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeForecastExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ForecastExportJobArn
 */
class DescribeForecastExportJobRequest extends Request
{
    /**
     * @param array{ForecastExportJobArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
