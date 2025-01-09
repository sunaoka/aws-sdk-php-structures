<?php

namespace Sunaoka\Aws\Structures\ForecastService\DeleteWhatIfForecast;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WhatIfForecastArn
 */
class DeleteWhatIfForecastRequest extends Request
{
    /**
     * @param array{WhatIfForecastArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
