<?php

namespace Sunaoka\Aws\Structures\Connect\ListAssociatedContacts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactId
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListAssociatedContactsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactId: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
