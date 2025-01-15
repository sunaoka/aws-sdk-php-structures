<?php

namespace Sunaoka\Aws\Structures\ConnectCases\ListTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property list<'Active'|'Inactive'>|null $status
 */
class ListTemplatesRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     status?: list<'Active'|'Inactive'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
