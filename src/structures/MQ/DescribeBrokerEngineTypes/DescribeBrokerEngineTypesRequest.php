<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeBrokerEngineTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EngineType
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeBrokerEngineTypesRequest extends Request
{
    /**
     * @param array{
     *     EngineType?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
