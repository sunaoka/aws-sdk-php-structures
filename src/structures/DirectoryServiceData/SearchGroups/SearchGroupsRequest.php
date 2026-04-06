<?php

namespace Sunaoka\Aws\Structures\DirectoryServiceData\SearchGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DirectoryId
 * @property int<1, 250>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $Realm
 * @property list<string> $SearchAttributes
 * @property string $SearchString
 */
class SearchGroupsRequest extends Request
{
    /**
     * @param array{
     *     DirectoryId: string,
     *     MaxResults?: int<1, 250>|null,
     *     NextToken?: string|null,
     *     Realm?: string|null,
     *     SearchAttributes: list<string>,
     *     SearchString: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
