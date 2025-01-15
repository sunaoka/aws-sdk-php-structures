<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListContactChannels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactId
 * @property string|null $NextToken
 * @property int<0, 1024>|null $MaxResults
 */
class ListContactChannelsRequest extends Request
{
    /**
     * @param array{
     *     ContactId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<0, 1024>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
