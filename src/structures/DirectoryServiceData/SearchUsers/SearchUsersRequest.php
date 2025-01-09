<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\SearchUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property int<1, 250> $MaxResults
 * @property string $NextToken
 * @property string $Realm
 * @property list<string> $SearchAttributes
 * @property string $SearchString
 */
class SearchUsersRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     MaxResults?: int<1, 250>,
     *     NextToken?: string,
     *     Realm?: string,
     *     SearchAttributes: list<string>,
     *     SearchString: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
