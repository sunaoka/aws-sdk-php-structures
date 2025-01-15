<?php

namespace Sunaoka\Aws\Structures\Organizations\ListDelegatedServicesForAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string|null $NextToken
 * @property int<1, 20>|null $MaxResults
 */
class ListDelegatedServicesForAccountRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 20>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
