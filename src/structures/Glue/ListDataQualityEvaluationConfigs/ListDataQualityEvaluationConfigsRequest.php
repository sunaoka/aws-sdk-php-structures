<?php

namespace Sunaoka\Aws\Structures\Glue\ListDataQualityEvaluationConfigs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'CATALOG'|'DATABASE'|'TABLE'|null $Level
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class ListDataQualityEvaluationConfigsRequest extends Request
{
    /**
     * @param array{
     *     Level?: 'CATALOG'|'DATABASE'|'TABLE'|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
