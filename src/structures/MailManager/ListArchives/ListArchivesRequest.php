<?php

namespace Sunaoka\Aws\Structures\MailManager\ListArchives;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 50>|null $PageSize
 */
class ListArchivesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     PageSize?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
