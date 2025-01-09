<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeWhatIfForecast;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WhatIfForecastArn
 */
class DescribeWhatIfForecastRequest extends Request
{
    /**
     * @param array{WhatIfForecastArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
