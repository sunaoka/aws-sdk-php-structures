<?php

namespace Sunaoka\Aws\Structures\MailManager\ListArchiveSearches;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ArchiveId
 * @property string|null $NextToken
 * @property int<1, 50>|null $PageSize
 */
class ListArchiveSearchesRequest extends Request
{
    /**
     * @param array{
     *     ArchiveId: string,
     *     NextToken?: string|null,
     *     PageSize?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
