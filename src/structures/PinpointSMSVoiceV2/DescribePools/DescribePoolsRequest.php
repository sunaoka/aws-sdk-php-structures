<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribePools;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $PoolIds
 * @property list<Shapes\PoolFilter>|null $Filters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property 'SELF'|'SHARED'|null $Owner
 */
class DescribePoolsRequest extends Request
{
    /**
     * @param array{
     *     PoolIds?: list<string>|null,
     *     Filters?: list<Shapes\PoolFilter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     Owner?: 'SELF'|'SHARED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
