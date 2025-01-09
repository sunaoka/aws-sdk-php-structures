<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribePools;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $PoolIds
 * @property list<Shapes\PoolFilter> $Filters
 * @property string $NextToken
 * @property int $MaxResults
 * @property 'SELF'|'SHARED' $Owner
 */
class DescribePoolsRequest extends Request
{
    /**
     * @param array{
     *     PoolIds?: list<string>,
     *     Filters?: list<Shapes\PoolFilter>,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     Owner?: 'SELF'|'SHARED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
