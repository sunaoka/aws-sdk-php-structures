<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeBrokerEngineTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EngineType
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class DescribeBrokerEngineTypesRequest extends Request
{
    /**
     * @param array{
     *     EngineType?: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
