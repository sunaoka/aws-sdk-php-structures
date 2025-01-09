<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchFolders;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property list<Shapes\FolderSearchFilter> $Filters
 * @property string $NextToken
 * @property int $MaxResults
 */
class SearchFoldersRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     Filters: list<Shapes\FolderSearchFilter>,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
