<?php

namespace Sunaoka\Aws\Structures\MailManager\ListArchiveSearches;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ArchiveId
 * @property string $NextToken
 * @property int<1, 50> $PageSize
 */
class ListArchiveSearchesRequest extends Request
{
    /**
     * @param array{
     *     ArchiveId: string,
     *     NextToken?: string,
     *     PageSize?: int<1, 50>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
