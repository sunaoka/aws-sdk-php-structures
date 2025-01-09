<?php

namespace Sunaoka\Aws\Structures\SSMContacts\ListPagesByContact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactId
 * @property string $NextToken
 * @property int<0, 1024> $MaxResults
 */
class ListPagesByContactRequest extends Request
{
    /**
     * @param array{
     *     ContactId: string,
     *     NextToken?: string,
     *     MaxResults?: int<0, 1024>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
