<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribePredictorBacktestExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PredictorBacktestExportJobArn
 */
class DescribePredictorBacktestExportJobRequest extends Request
{
    /**
     * @param array{PredictorBacktestExportJobArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
