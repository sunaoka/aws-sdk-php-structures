<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\Query;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueryString
 * @property string $ClientToken
 * @property string $NextToken
 * @property int<1, 1000> $MaxRows
 * @property Shapes\QueryInsights $QueryInsights
 */
class QueryRequest extends Request
{
    /**
     * @param array{
     *     QueryString: string,
     *     ClientToken?: string,
     *     NextToken?: string,
     *     MaxRows?: int<1, 1000>,
     *     QueryInsights?: Shapes\QueryInsights
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
