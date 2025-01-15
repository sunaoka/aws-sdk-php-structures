<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeBrokerInstanceOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $EngineType
 * @property string|null $HostInstanceType
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $StorageType
 */
class DescribeBrokerInstanceOptionsRequest extends Request
{
    /**
     * @param array{
     *     EngineType?: string|null,
     *     HostInstanceType?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     StorageType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
