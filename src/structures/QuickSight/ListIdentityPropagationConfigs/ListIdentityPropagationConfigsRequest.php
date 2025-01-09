<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListIdentityPropagationConfigs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property int<1, 10> $MaxResults
 * @property string $NextToken
 */
class ListIdentityPropagationConfigsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     MaxResults?: int<1, 10>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
