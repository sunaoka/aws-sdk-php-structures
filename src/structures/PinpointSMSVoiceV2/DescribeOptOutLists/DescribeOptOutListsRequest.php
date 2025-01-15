<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeOptOutLists;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $OptOutListNames
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property 'SELF'|'SHARED'|null $Owner
 */
class DescribeOptOutListsRequest extends Request
{
    /**
     * @param array{
     *     OptOutListNames?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     Owner?: 'SELF'|'SHARED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
