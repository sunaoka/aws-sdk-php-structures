<?php

namespace Sunaoka\Aws\Structures\MQ\DescribeSharedResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BrokerId
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeSharedResourcesRequest extends Request
{
    /**
     * @param array{
     *     BrokerId: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
