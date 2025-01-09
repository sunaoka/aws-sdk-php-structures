<?php

namespace Sunaoka\Aws\Structures\Organizations\ListDelegatedServicesForAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $NextToken
 * @property int<1, 20> $MaxResults
 */
class ListDelegatedServicesForAccountRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 20>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
