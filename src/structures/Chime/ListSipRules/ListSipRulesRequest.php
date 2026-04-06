<?php

namespace Sunaoka\Aws\Structures\Chime\ListSipRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SipMediaApplicationId
 * @property int<1, 99>|null $MaxResults
 * @property string|null $NextToken
 */
class ListSipRulesRequest extends Request
{
    /**
     * @param array{
     *     SipMediaApplicationId?: string|null,
     *     MaxResults?: int<1, 99>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
