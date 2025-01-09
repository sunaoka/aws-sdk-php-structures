<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeBrokerInstanceOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EngineType
 * @property string $HostInstanceType
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 * @property string $StorageType
 */
class DescribeBrokerInstanceOptionsRequest extends Request
{
    /**
     * @param array{
     *     EngineType?: string,
     *     HostInstanceType?: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string,
     *     StorageType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
