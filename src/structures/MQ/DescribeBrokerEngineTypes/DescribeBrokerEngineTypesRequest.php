<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeBrokerEngineTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $EngineType
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeBrokerEngineTypesRequest extends Request
{
    /**
     * @param array{
     *     EngineType?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
