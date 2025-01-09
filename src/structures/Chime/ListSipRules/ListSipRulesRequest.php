<?php

namespace Sunaoka\Aws\Structures\Chime\ListSipRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SipMediaApplicationId
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListSipRulesRequest extends Request
{
    /**
     * @param array{
     *     SipMediaApplicationId?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
