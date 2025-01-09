<?php

namespace Sunaoka\Aws\Structures\MailManager\ListArchiveExports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ArchiveId
 * @property string $NextToken
 * @property int $PageSize
 */
class ListArchiveExportsRequest extends Request
{
    /**
     * @param array{
     *     ArchiveId: string,
     *     NextToken?: string,
     *     PageSize?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
