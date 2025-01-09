<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreatePredictorBacktestExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PredictorBacktestExportJobName
 * @property string $PredictorArn
 * @property Shapes\DataDestination $Destination
 * @property list<Shapes\Tag> $Tags
 * @property string $Format
 */
class CreatePredictorBacktestExportJobRequest extends Request
{
    /**
     * @param array{
     *     PredictorBacktestExportJobName: string,
     *     PredictorArn: string,
     *     Destination: Shapes\DataDestination,
     *     Tags?: list<Shapes\Tag>,
     *     Format?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
