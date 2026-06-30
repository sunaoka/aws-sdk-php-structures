<?php

namespace Sunaoka\Aws\Structures\Acm\ListAcmeAccounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property string $AcmeEndpointArn
 */
class ListAcmeAccountsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     AcmeEndpointArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
