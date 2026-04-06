<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeOptOutLists;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $OptOutListNames
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class DescribeOptOutListsRequest extends Request
{
    /**
     * @param array{
     *     OptOutListNames?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
