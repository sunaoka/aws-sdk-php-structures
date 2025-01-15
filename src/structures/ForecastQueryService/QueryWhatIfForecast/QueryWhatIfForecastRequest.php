<?php

namespace Sunaoka\Aws\Structures\ForecastQueryService\QueryWhatIfForecast;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WhatIfForecastArn
 * @property string|null $StartDate
 * @property string|null $EndDate
 * @property array<string, string> $Filters
 * @property string|null $NextToken
 */
class QueryWhatIfForecastRequest extends Request
{
    /**
     * @param array{
     *     WhatIfForecastArn: string,
     *     StartDate?: string|null,
     *     EndDate?: string|null,
     *     Filters: array<string, string>,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
