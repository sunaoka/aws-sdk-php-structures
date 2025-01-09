<?php

namespace Sunaoka\Aws\Structures\ForecastService\DeleteForecastExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ForecastExportJobArn
 */
class DeleteForecastExportJobRequest extends Request
{
    /**
     * @param array{ForecastExportJobArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
