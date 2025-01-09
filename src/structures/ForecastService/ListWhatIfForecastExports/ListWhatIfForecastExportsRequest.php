<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListWhatIfForecastExports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property list<Shapes\Filter> $Filters
 */
class ListWhatIfForecastExportsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
