<?php

namespace Sunaoka\Aws\Structures\SesV2\ListContacts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ContactListName
 * @property Shapes\ListContactsFilter|null $Filter
 * @property int|null $PageSize
 * @property string|null $NextToken
 */
class ListContactsRequest extends Request
{
    /**
     * @param array{
     *     ContactListName: string,
     *     Filter?: Shapes\ListContactsFilter|null,
     *     PageSize?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
