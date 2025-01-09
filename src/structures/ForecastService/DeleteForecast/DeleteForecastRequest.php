<?php

namespace Sunaoka\Aws\Structures\ForecastService\DeleteForecast;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ForecastArn
 */
class DeleteForecastRequest extends Request
{
    /**
     * @param array{ForecastArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
