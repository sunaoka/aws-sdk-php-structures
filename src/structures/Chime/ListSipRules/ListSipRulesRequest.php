<?php

namespace Sunaoka\Aws\Structures\Chime\ListSipRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SipMediaApplicationId
 * @property int<1, 99> $MaxResults
 * @property string $NextToken
 */
class ListSipRulesRequest extends Request
{
    /**
     * @param array{
     *     SipMediaApplicationId?: string,
     *     MaxResults?: int<1, 99>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
