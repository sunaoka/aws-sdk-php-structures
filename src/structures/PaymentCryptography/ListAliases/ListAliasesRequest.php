<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ListAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $KeyArn
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListAliasesRequest extends Request
{
    /**
     * @param array{
     *     KeyArn?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
