<?php

namespace Sunaoka\Aws\Structures\IdentityStore\ListUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityStoreId
 * @property list<string>|null $Extensions
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property list<Shapes\Filter>|null $Filters
 */
class ListUsersRequest extends Request
{
    /**
     * @param array{
     *     IdentityStoreId: string,
     *     Extensions?: list<string>|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
