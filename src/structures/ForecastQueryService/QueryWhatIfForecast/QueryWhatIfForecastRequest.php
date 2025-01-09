<?php

namespace Sunaoka\Aws\Structures\ForecastQueryService\QueryWhatIfForecast;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WhatIfForecastArn
 * @property string $StartDate
 * @property string $EndDate
 * @property array<string, string> $Filters
 * @property string $NextToken
 */
class QueryWhatIfForecastRequest extends Request
{
    /**
     * @param array{
     *     WhatIfForecastArn: string,
     *     StartDate?: string,
     *     EndDate?: string,
     *     Filters: array<string, string>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
