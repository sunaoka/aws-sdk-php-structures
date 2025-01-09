<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeOptOutLists;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $OptOutListNames
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property 'SELF'|'SHARED' $Owner
 */
class DescribeOptOutListsRequest extends Request
{
    /**
     * @param array{
     *     OptOutListNames?: list<string>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     Owner?: 'SELF'|'SHARED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
