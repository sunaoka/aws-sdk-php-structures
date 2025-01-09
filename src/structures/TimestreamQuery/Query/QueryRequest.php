<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\Query;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueryString
 * @property string $ClientToken
 * @property string $NextToken
 * @property int $MaxRows
 * @property Shapes\QueryInsights $QueryInsights
 */
class QueryRequest extends Request
{
    /**
     * @param array{
     *     QueryString: string,
     *     ClientToken?: string,
     *     NextToken?: string,
     *     MaxRows?: int,
     *     QueryInsights?: Shapes\QueryInsights
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
