<?php

namespace Sunaoka\Aws\Structures\ForecastService\DeletePredictorBacktestExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PredictorBacktestExportJobArn
 */
class DeletePredictorBacktestExportJobRequest extends Request
{
    /**
     * @param array{PredictorBacktestExportJobArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
