<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\ListSipRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SipMediaApplicationId
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListSipRulesRequest extends Request
{
    /**
     * @param array{
     *     SipMediaApplicationId?: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
