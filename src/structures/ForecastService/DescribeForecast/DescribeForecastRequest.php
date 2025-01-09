<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeForecast;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ForecastArn
 */
class DescribeForecastRequest extends Request
{
    /**
     * @param array{ForecastArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
