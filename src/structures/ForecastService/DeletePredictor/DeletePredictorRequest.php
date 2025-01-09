<?php

namespace Sunaoka\Aws\Structures\ForecastService\DeletePredictor;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PredictorArn
 */
class DeletePredictorRequest extends Request
{
    /**
     * @param array{PredictorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
