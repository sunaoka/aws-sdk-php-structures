<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\Query;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueryString
 * @property string|null $ClientToken
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxRows
 * @property Shapes\QueryInsights|null $QueryInsights
 */
class QueryRequest extends Request
{
    /**
     * @param array{
     *     QueryString: string,
     *     ClientToken?: string|null,
     *     NextToken?: string|null,
     *     MaxRows?: int<1, 1000>|null,
     *     QueryInsights?: Shapes\QueryInsights|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
