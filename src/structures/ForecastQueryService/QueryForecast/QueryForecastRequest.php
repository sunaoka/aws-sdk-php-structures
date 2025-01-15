<?php

namespace Sunaoka\Aws\Structures\ForecastQueryService\QueryForecast;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ForecastArn
 * @property string|null $StartDate
 * @property string|null $EndDate
 * @property array<string, string> $Filters
 * @property string|null $NextToken
 */
class QueryForecastRequest extends Request
{
    /**
     * @param array{
     *     ForecastArn: string,
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
