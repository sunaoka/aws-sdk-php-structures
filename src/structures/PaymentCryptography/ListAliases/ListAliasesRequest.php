<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ListAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyArn
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListAliasesRequest extends Request
{
    /**
     * @param array{
     *     KeyArn?: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
