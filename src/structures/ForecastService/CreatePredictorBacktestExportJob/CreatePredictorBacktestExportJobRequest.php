<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreatePredictorBacktestExportJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PredictorBacktestExportJobName
 * @property string $PredictorArn
 * @property Shapes\DataDestination $Destination
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $Format
 */
class CreatePredictorBacktestExportJobRequest extends Request
{
    /**
     * @param array{
     *     PredictorBacktestExportJobName: string,
     *     PredictorArn: string,
     *     Destination: Shapes\DataDestination,
     *     Tags?: list<Shapes\Tag>|null,
     *     Format?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
