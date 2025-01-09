<?php

namespace Sunaoka\Aws\Structures\ForecastQueryService\QueryForecast;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ForecastArn
 * @property string $StartDate
 * @property string $EndDate
 * @property array<string, string> $Filters
 * @property string $NextToken
 */
class QueryForecastRequest extends Request
{
    /**
     * @param array{
     *     ForecastArn: string,
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
