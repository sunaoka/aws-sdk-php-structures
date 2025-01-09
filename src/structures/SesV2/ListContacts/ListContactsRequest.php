<?php

namespace Sunaoka\Aws\Structures\SesV2\ListContacts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactListName
 * @property Shapes\ListContactsFilter $Filter
 * @property int $PageSize
 * @property string $NextToken
 */
class ListContactsRequest extends Request
{
    /**
     * @param array{
     *     ContactListName: string,
     *     Filter?: Shapes\ListContactsFilter,
     *     PageSize?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
