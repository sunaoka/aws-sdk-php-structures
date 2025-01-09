<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListContactChannels;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactId
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListContactChannelsRequest extends Request
{
    /**
     * @param array{
     *     ContactId: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
